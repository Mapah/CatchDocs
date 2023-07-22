<?php

namespace App\Http\Controllers\Chef_Bureau;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Mail\PasswordSent;
use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ChefBureauUserController extends Controller
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
        return view('chef_bureau.users.index',['users' => $users]);
    }

    public function create()
    {

        return view('chef_bureau.users.create');
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

        // $user->syncRoles($request->role);
        // Log::info('password for '.$user->name,['password'=> $user->phone]);
        // send mail to user for password
        // Mail::to($user->email)->locale('en')->send(new PasswordSent($user->name,$user->phone));
        //

        return redirect('/chef_bureau_users')->with('status','');

    }
}
