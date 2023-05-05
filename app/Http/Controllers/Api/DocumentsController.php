<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Documents;
// use Dotenv\Validator;
// use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpFoundation\Response;

class DocumentsController extends Controller
{
    public function documentsStore(Request $request)
    {
        $this->validate($request, [
            'documents' => 'required|image|mimes:pdf|max:5000',
        ]);
        $documents_path = $request->file('documents')->store('documents', 'public');

        $data = Documents::create([
           
            'documents' => $documents_path,
        ]);
        return response($data, Response::HTTP_CREATED);
    }

    public function FileStore(Request $request)
    {
        // $validator =  Validator::make($request->all(),[
        //     'documents' => 'required|mimes:pdf|max:5000',
        //     'description'=> 'required|max:2000',
        //     'name'=> 'required|max:2000',
        //     'offices_id'=> 'required|max:2000',
        //     'title'=> 'required|max:2000',
        //     'source'=> 'required|max:2000',
        //     'text'=> 'required|max:2000',
        //     'tags'=> 'required|max:2000',
        //     'annotations'=> 'required|max:2000',
        // ]);
       
        // if ($validator->fails())
        //  {
        //     return response()->json($validator->failed(),400);
        //  }
      

         $documents_path = $request->file('documents')->store('documents', 'public');
       

         $data = Documents::create([
             'name'=> $request->name,
             'description' => $request->description,
             'path' => $documents_path,
             'offices_id'=>$request->offices_id, 
             'title'=> $request->documents_title,
             'source'=> $request->documents_source,
             'text'=> $request->documents_text,
             'tags'=> $request->documents_tags,
             'annotations'=> $request->documents_annotations,
         ]);

         return response()->json(["message"=>"document has been created successfully",$data],200);
     }

}

