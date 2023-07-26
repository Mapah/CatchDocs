<?php

namespace App\Http\Controllers;
use App\Models\Bureau;
use App\Models\Administration;
use App\Models\User;
use Illuminate\Http\Request;

class BureauController extends Controller
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

        $bureaux=bureau::all();
        return view('super_admin.bureaux.index',[
            'bureaux'=>$bureaux,
        ]);

    }

    public function create()
    {
        $administrations=Administration::all();
        return view('super_admin.bureaux.create',compact('administrations'));

    }

    public function edit($id)
    {
        $bureau = bureau::find($id);
        $users = User::where('role','CHEFBUREAU')->get();
        return view('super_admin.bureaux.edit',['bureau'=>$bureau, 'users'=>$users]);

    }

    public function add_chef_bureau($id)
    {
        $bureau = bureau::find($id);
        $users = User::where('role','CHEFBUREAU')->get();
        return view('super_admin.bureaux.add_chef_bureau',['bureau'=>$bureau, 'users'=>$users]);

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $bureau = new Bureau();
        $bureau->name =$request->name;
        $bureau->administration_id =$request->administration_id;
        $bureau->description = $request->description;

        $bureau->save();

        return redirect('/bureaux')->with('status','bureau Stored Successfully');

    }
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $bureau = bureau::find($request->id);
        $bureau->name =$request->name;
        $bureau->user_id =$request->user_id;
        $bureau->description = $request->description;
        $bureau->save();

        return redirect('/bureaux')->with('status','bureau updated Successfully');

    }

    public function save_chef_bureau(Request $request)
    {

        $bureau = bureau::find($request->id);
        $bureau->user_id =$request->user_id;

        $bureau->save();

        return redirect('/bureaux')->with('status','admin was added Successfully');

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

