<?php

namespace App\Http\Controllers\Chef_Bureau;

use App\Models\Bureau;
use App\Models\Document;
use App\Models\Administration;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChefBureauDocumentController extends Controller
{
    public function index(Request $request)
    {
        // dd('fff');
        // $request->session()->reflash();
        if (session('status')) {
            $request->session()->now("status",session('status'));
        }
        if (session('error')) {
            $request->session()->now("error",session('error'));
        }
$user=Auth::user();
        $documents=Document::where('user_id',$user->id)->get();
        return view('chef_bureau.Documents.index',[
            'documents'=>$documents,
        ]);

    }

    public function create()
    {
        $bureaux=Bureau::all();
        $users = User::where('role','CHEFBUREAU')->get();
        return view('chef_bureau.Documents.create',compact('bureaux','users'));
    }

    public function edit($id)
    {
        $Document = Document::find($id);
        return view('chef_bureau.Documents.edit',['Document'=>$Document, 'administration'=>$Document]);

    }

    public function store(Request $request)
    {
        //  dd('ghh');
        $request->validate([
            'name' => 'required',
        ]);
        $user=Auth::user();
        $bureau=Bureau::where('user_id',$user->id)->first();
        $Document = new Document();
        $Document->name =$request->name;
        $Document->user_id =$user->id;
        $Document->bureau_id =$bureau->id;
        $Document->qr_code =$request->qr_code;
        $Document->code =$request->code;
        $Document->number =$request->number	;

        if ($request->hasFile('document')) {
            // resize and upload
            $ext = pathinfo($_FILES['document']['name'], PATHINFO_EXTENSION);
            $name=randomString(1).'.'.$ext;
            if($request->file('document')->move(public_path('documents'),$name)){
                // resizeImg($name,'config/logos',177,35,$ext);
                $Document->document = $name;
            }
            //
        }
        $Document->save();

        return back()->with('status','Document Stored Successfully');
    }

    public function store_api(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $Document = new Document();
        $Document->name = $request->name;
        $Document->user_id =$request->user_id;
        $Document->bureau_id = $request->bureau_id;

        $Document->qr_code = randomString(10);

        $uniqueCode = false;
        while (!$uniqueCode) {
            $code = randomString(8);
            // Vérifier si le code est unique dans la base données
            if (!Document::where('code', $code)->exists()) {
                $Document->code = $code;
                $uniqueCode = true;
            }
        }

        if ($request->hasFile('document')) {
            $ext = pathinfo($_FILES['document']['name'], PATHINFO_EXTENSION);
            $name=randomString(1).'.'.$ext;
            if($request->file('document')->move(public_path('documents'),$name)){
                $Document->document = $name;
            }
        }

        $Document->save();

        return response()->json(['message' => 'Succès']);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $Document = Document::find($request->id);
        $Document->name =$request->name;

        $Document->description = $request->description;
        $Document->save();

        return back()->with('status','Document updated Successfully');

    }

    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);

        Document::where('id',$request->id)->delete();
        return back()->with('status','Operation Successful');
    }

    public function print($id){
        $document = Document::find($id);
        $filepath = $document->document;
    return response()->file(public_path('documents/'.$document->document));

        // $myFile = public_path('documents/'.$document->document);
    	// $headers = ['Content-Type: application/pdf'];
    	// $newName = $document->name.'.pdf';
    	// return response()->print($myFile, $newName, $headers);
        // return view('admin.Documents.print',['document'=>$document]);
// dd($document);
    }

}

