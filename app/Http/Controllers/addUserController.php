<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\office;
use App\Models\administration;
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
        return redirect('http://127.0.0.1:8000/user')->back()->with('flash_message','user delete!');

    }
    function modifyUser ($id) {
        $user =  User::find($id);
        return view('views.modifyUser',compact('user'));
    }

    function modify (Request $request) {
        $user =  User::find($request->id);

       
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password= Hash::make($request->password);
        $user->save();
        return redirect('http://127.0.0.1:8000/user')->back()->with('flash_message','user update!');
    }
    function modifyOffice ($id) {
        $office =  office::find($id);
        return view('modifyOffice',compact('office'));
    }

    function modifyoff(Request $request) {
        $office =  office::find($request->id);

       
        $office->name = $request->name;
        $office->description = $request->description;
        $office->save();
        return redirect('http://127.0.0.1:8000/office')->back()->with('flash_message','offoce update!');
    }
    function modifyadministration ($id) {
        $administration =  administration::find($id);
        return view('modifyOffice',compact('administration'));
    }

    function modifyadminis(Request $request) {
        $administration =  administration::find($request->id);

        $administration->name = $request->name;
        $administration->description = $request->description;
        $administration->save();
        return redirect()->back()->with('flash_message','administration update!');
    }
    function documents(){
        $data=Documents::get();
        return view('document',compact('data'));
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
        $req = new user;
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
