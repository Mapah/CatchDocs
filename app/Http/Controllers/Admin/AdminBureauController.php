<?php

namespace App\Http\Controllers\Admin;

use App\Models\Bureau;
use Illuminate\Http\Request;
use App\Models\Administration;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminBureauController extends Controller
{
    public function index(Request $request)
    {
        // $request->session()->reflash();
        if (session('status')) {
            $request->session()->now("status",session('status'));
        }
        if (session('error')) {
            $request->session()->now("error",session('error'));
        }
        $user=Auth::user();
        $administration=Administration::where('user_id',$user->id)->first();
        $bureaux=bureau::where('administration_id',$administration->id)->get();
        return view('admin.bureaux.index',[
            'bureaux'=>$bureaux,
        ]);

    }

    public function create()
    {
        $user=Auth::user();
        $administrations=Administration::where('user_id',$user->id)->get();
        return view('admin.bureaux.create',compact('administrations'));

    }

    public function edit($id)
    {
        $bureau = bureau::find($id);
        return view('admin.bureaux.edit',['bureau'=>$bureau]);

    }

    public function add_chef_bureau($id)
    {
        $bureau = bureau::find($id);
        $users = User::where('role','CHEFBUREAU')->get();
        return view('admin.bureaux.add_chef_bureau',['bureau'=>$bureau, 'users'=>$users]);

    }

    public function store(Request $request)
    {
        // dd('ghh');
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $bureau = new Bureau();
        $bureau->name =$request->name;
        $bureau->administration_id =$request->administration_id;
        $bureau->description = $request->description;

        $bureau->save();

        return redirect('/admin_bureaux')->with('status','bureau Stored Successfully');

    }
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $bureau = bureau::find($request->id);
        $bureau->name =$request->name;

        $bureau->description = $request->description;
        $bureau->save();

        return redirect('/admin_bureaux')->with('status','bureau updated Successfully');

    }

    public function save_chef_bureau(Request $request)
    {

        $bureau = bureau::find($request->id);
        $bureau->user_id =$request->user_id;

        $bureau->save();

        return redirect('/admin_bureaux')->with('status',' added Successfully');

    }

    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);

        Bureau::where('id',$request->id)->delete();
        return back()->with('status','Operation Successful');
    }

}

