<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\Office;
use App\Models\Administrator;
use App\Models\Documents;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Use_;
use Symfony\Contracts\Service\Attribute\Required;

class adduserController extends Controller
{
    function adduser (Request $request){
       

        $req = new user;
        $req->name = $request->name;
        $req->email = $request->email;
        $req->password= Hash::make($request->password);
        $req->save();
        return redirect()->back()->with('flash_message','user added!');
    }
    function delete($id){
        $user =  User::find($id);
        $user->delete();
        return redirect('http://127.0.0.1:8000/user')->back()->with('flash_message','user deleted!');
    }
    function modifyUser ($id) {
        $user =  User::find($id);
        return view('modifyUser',compact('user'));
    }
    function modify (Request $request) {
        // $request->validate([
        //     'name'=>'required',
        //     'email'=>'required',
        //     'password'=>'required',
        // ]);
        $user =  User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password= Hash::make($request->password);
        $user->save();
        // User::where('id','=',$id)->update([
        //     'name'=>$name,
        //     'name'=>$name,           
        // ]);
        return redirect('http://127.0.0.1:8000/user')->back()->with('flash_message','user update!');
        
    }




    function administration(){
        $data=Administrator::get();
        return view('administration',compact('data'));
    }
    function addAdministration(){
        return view('addAdministration');
    }
    function saveAdministration(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);
        $req = new Administrator;
        $req->name = $request->name;
        $req->description = $request->description;
        $req->save();
        return redirect()->back()->with('flash_message','Administration added!');
    }
    function modifyAdministration ($id) {
        $data =  Administrator::find($id);
        return view('modifyAdministration',compact('data'));
    }
    function updateAdministration(Request $request) {
        // $request->validate([
        //     'name'=>'required',
        //     'description'=>'required',
        // ]);
        $req =  Administrator::find($request->id);
        $req->name = $request->name;
        $req->description = $request->description;
        $req->save();
        return redirect()->back()->with('flash_message','administration updated!');
    }
    function deleteAdministration($id){
        $data =  Administrator::find($id);
        $data->delete();
        return redirect('')->back()->with('flash_message','Adminstration deleted!');
    }




    function documents(){
        $data1 = Office::get();
        $data=Documents::get();
        return view('document',compact('data','data1'));
    }
    function addDocument(){
        return view('addDocment');
    }
    function save_addDocument(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'path'=>'required',
            'title'=>'required',
            'tags'=>'required',
            'annotations'=>'required',
            'offices_id'=>'required',
        ]);
        $req = new Documents;
        $req->name = $request->name;
        $req->description = $request->description;
        $req->path = $request->path;
        $req->title = $request->title;
        $req->tags = $request->tags;
        $req->annotations = $request->annotations;
        $req->offices_id = $request->offices_id;
        $req->save();
        return redirect()->back()->with('success','Document added!');
    }
}
