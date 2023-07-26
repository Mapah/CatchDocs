<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Administration;
use App\Models\User;
use App\Models\administrationCategory;

class AdministrationController extends Controller
{
    //
    public function index(Request $request)
    {
        // $request->session()->reflash();
        if (session('status')) {
            $request->session()->now("status",session('status'));
        }
        if (session('error')) {
            $request->session()->now("error",session('error'));
        }

        $administrations=Administration::all();
        return view('super_admin.administrations.index',[
            'administrations'=>$administrations,
        ]);

    }
    public function list()
    {
        $administrations=Administration::all();
        return $administrations;
    }

    public function create()
    {
        return view('super_admin.administrations.create');

    }

    public function edit($id)
    {
        $administration = administration::find($id);
        $users = User::where('role','ADMIN')->get();
        return view('super_admin.administrations.edit',['administration'=>$administration, 'users'=>$users]);

    }

    public function add_admin($id)
    {
        $administration = administration::find($id);
        $users = User::where('role','ADMIN')->get();
        return view('super_admin.administrations.add_admin',['administration'=>$administration, 'users'=>$users]);

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $administration = new Administration();
        $administration->name =$request->name;

        $administration->description = $request->description;

        $administration->save();

        return redirect('/administrations')->with('status','administration Stored Successfully');

    }
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $administration = administration::find($request->id);
        $administration->name =$request->name;
        $administration->user_id =$request->user_id;
        $administration->description = $request->description;
        $administration->save();

        return redirect('/administrations')->with('status','administration updated Successfully');

    }

    public function save_admin(Request $request)
    {

        $administration = Administration::find($request->id);
        $administration->user_id =$request->user_id;

        $administration->save();

        return redirect('/administrations')->with('status','admin was added Successfully');

    }

    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);

        Administration::where('id',$request->id)->delete();
        return back()->with('status','Operation Successful');
    }

}
