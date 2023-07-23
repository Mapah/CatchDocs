<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\PasswordSent;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SPUsersController extends Controller
{
    //
    public function index(Request $request)
    {
        if (session('status')) {
            $request->session()->now("status",session('status'));
        }
        if (session('error')) {
            $request->session()->now("error",session('error'));
        }

        $users = User::all();
        return view('super_admin.users.index',['users' => $users]);
    }

    public function create()
    {

        return view('super_admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required',
            'function' => 'required',
            'role' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->function = $request->function;
        $user->role = $request->role;
        // $password = randomString();
        $user->password = Hash::make($request->phone);
        if ($request->hasFile('image')) {
            $name=randomString(1).".jpg";
            $request->file('image')->move(public_path('user-profiles'),$name);

            $user->img = $name;
        }
        $user->save();

        return redirect('/users')->with('status','');

    }
}
