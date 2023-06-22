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
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Contracts\Service\Attribute\Required;

class adduserController extends Controller
{
    // function user(){
    //     $user = user::table('users')->paginate(15);
    //     return view('user', ['users' => $user]);
    // }
    function addUser(){
        return view('addUser');

    }
    function saveuser (Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        $req = new user;
        $req->name = $request->name;
        $req->email = $request->email;
        $req->password= Hash::make($request->password);
        $req->save();
        return redirect('user');
    }
    function delete($id){
        $user =  User::find($id);
        $user->delete();
        return redirect('user');
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
        return redirect('user');
        
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
        $req->user_id = $request->user_id;

        $req->save();
        return redirect('administration');
    }
    function modifyAdministration ($id) {
        $data =  Administrator::find($id);
        return view('modifyAdministration',compact('data'));
    }
    function updateAdministration(Request $request) {

        $req =  Administrator::find($request->id);
        $req->name = $request->name;
        $req->description = $request->description;
        // $req->user_id = $request->user_id;
        $req->save();
        return redirect('administration');
    }
    function deleteAdministration($id){
        $data =  Administrator::find($id);
        $data->delete();
        return redirect('administration');
    }




    function documents(){
        $data1 = Office::get();
        $document=Documents::get();
        return view('document',compact('document','data1'));
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

        $url = time().'-'.$request->name . '.'.$request->path->extension();    
        $request->path->move(public_path('images'), $url);

        $req = new Documents;
        $req->name = $request->name;
        $req->description = $request->description;
        $req->path = $url; //$request->path;
        $req->title = $request->title;
        $req->tags = $request->tags;
        $req->source = $request->tags;
        $req->text = $request->tags;
        $req->annotations = $request->annotations;
        // $req->offices_id = $request->offices_id;
        $req->offices_id = 7;
        $req->save();
        return redirect('documents');
    }
    function modifyDocument($id){
        $document =  Documents::find($id);
        return view('modifyDocument',compact('document'));   
     }

     function updateDocument(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'path'=>'required',
            'title'=>'required',
            'tags'=>'required',
            'annotations'=>'required',
            'offices_id'=>'required',
        ]);
        $req =  Documents::find($request->id);
        $req->name = $request->name;
        $req->description = $request->description;
        $req->path = $request->path;
        $req->title = $request->title;
        $req->tags = $request->tags;
        $req->annotations = $request->annotations;
        $req->offices_id = $request->offices_id;
        $req->Documentssave();
        return redirect('documents');
    
    }
    function getDocumentByIdOffice(Request $request){
        $id = $request->get('office');
        $document = Documents::where('offices_id', $id)->get();      
        $data1 = Office::get();
        return view('document',compact('document','data1'));
    }
        function deleteDocument($id){
        $document =  Documents::find($id);
        $document->delete();
        return redirect('documents')->back()
        ->with('error', 'An error occurred while trying to display the update form.');
                // return Redirect::back()->with('message', [
                //     'type' => 'error',
                //     'text' => 'Invalid client app.'
                // ]);
            //    return redirect('/welcome')->with('message', [
            //         'type' => 'success',
            //         'text' => 'Vous avez été déconnecté avec succès !'
            //     ]);
    }

   

    function office(){
        $data=Office::all();
        return view('office',compact('data'));
    }
    function addOffice(){
        return view('addOffice');
    }
    function saveOffice(Request $request){
        $request->validate([
            'name'=>'required',
            'admin_id'=>'required',
            'description'=>'required',
        ]);
        $req = new Office;
        $req->name = $request->name;
        $req->admin_id = $request->admin_id;
        $req->description = $request->description;
        $req->save();
        return redirect('office');
    }
    
    function modifyOffice ($id) {
        $data =  office::find($id);
        return view('modifyOffice',compact('data'));
    }
    function updateOffice(Request $request) {
        $request->validate([
            'name'=>'required',
            'admin_id'=>'required',
            'description'=>'required',
        ]);
        $data =  office::find($request->id);      
        $data->name = $request->name;
        $data->description = $request->description;
        $data->save();
        return redirect('office');
    }
    function deleteOffice($id){
        $data =  office::find($id);
        $data->delete();
        return redirect('office');
    }



    function searching(Request $request){

        if($request->get('query')){
            $users =  User::select('id','name','email','password')->where('name','like','%'.$request->get('query').'%')
                                                                  ->orWhere('email','like','%'.$request->get('query').'%')
                                                                  ->get();
           
            return view('search',compact('users'));
        }else{
            return redirect('user');
        }
        // $search_text = $_GET['query'];
        // $users = User::where('name','like','%'.$search_text.'%')->with('category')->get();
        // return view('search',compact('users'));
    }

    function searchingOffice(Request $request){
        if($request->get('searchOffice')){
            $data =  Office::select('id','name','admin_id','description')->where('name','like','%'.$request->get('searchOffice').'%')
                                                      ->orWhere('admin_id','like','%'.$request->get('searchOffice').'%')
                                                      ->orWhere('description','like','%'.$request->get('searchOffice').'%')                
                                                      ->get();
                            
            return view('searchOffice',compact('data'));
        }else{
            return redirect('office');
        }
         
    }


    function searchingAdmin(Request $request){
        if($request->get('searchAdmin')){
            $data =  Administrator::select('id','name','description')->where('name','like','%'.$request->get('searchAdmin').'%')
                                                      ->orWhere('description','like','%'.$request->get('searchAdmin').'%')                
                                                      ->get();
                            
            return view('searchAdministration',compact('data'));
        }else{
            return redirect('administration');
        }
         
    }


    function searchingDocs(Request $request){
        // dd($request->get('searchDocoment')); 
        if($request->get('searchDocoment')){
            $document =  Documents::select('id','name','description','path','title','tags','annotations','offices_id')->where('name','like','%'.$request->get('searchDocoment').'%')
                                                      ->orWhere('description','like','%'.$request->get('searchDocoment').'%')
                                                      ->orWhere('path','like','%'.$request->get('searchDocoment').'%')
                                                      ->orWhere('title','like','%'.$request->get('searchDocoment').'%') 
                                                      ->orWhere('source','like','%'.$request->get('searchDocoment').'%')                  
                                                      ->orWhere('text','like','%'.$request->get('searchDocoment').'%')  
                                                      ->orWhere('tags','like','%'.$request->get('searchDocoment').'%')   
                                                      ->orWhere('annotations','like','%'.$request->get('searchDocoment').'%')           
                                                      ->orWhere('offices_id','like','%'.$request->get('searchDocoment').'%')           
                                                      ->get();
                             
        $data1 = Office::get();
        return view('document',compact('document','data1'));
            // return view('searchDocument',compact('document'));
        }else{
            return redirect('document');
        }
         
    }
}


