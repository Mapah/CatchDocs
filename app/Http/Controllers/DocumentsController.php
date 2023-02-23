<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Documents;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;
class DocumentsController extends Controller
{
    public function index()
    {
        $documents = Documents::all();

        return response()->json($documents,200);
    }


    public function FileStore(Request $request)
    {
        $validator =  Validator::make($request->all(),[
            
            'documents' => 'required|mimes:pdf|max:5000',
            'description'=> 'required|max:2000',
            'name'=> 'required|max:2000',
        ]);
       
        if ($validator->fails())
         {
            return response()->json($validator->failed(),400);
         }
      

         $documents_path = $request->file('documents')->store('documents', 'public');
       

         $data = Documents::create([
             'name'=> $request->name,
             'description' => $request->description,
             'path' => $documents_path,
         ]);

         return response()->json(["message"=>"document has been created successfully",$data],200);
     }
}
