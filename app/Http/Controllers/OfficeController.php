<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $office = Office::all();
 
        return view('offices.index', compact('offices'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function OfficeCreate()
    {
        return view('offices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function OfficeStore(Request $request)
    {
        $validator =  Validator::make($request->all(),[
            
            'name'=> 'required|unique:offices|max:255',
            'description'=> 'required|max:255',
            'admin_id'=> 'required',
        ]);

        if ($validator->fails())
        {
           return response()->json($validator->failed(),400);
        }
        $data = Office::create([
            'name'=> $request->name,
            'description' => $request->description,
            'admin_id'=> $request->admin_id,
        ]);
        
        return response()->json(["message"=>"offices has been created successfully",$data],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\offices  $offices
     * @return \Illuminate\Http\Response
     */
    public function OfficeShow($id)
    {
        $offices = Office::find($id);
        return view('offices.show', compact('offices')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\offices  $offices
     * @return \Illuminate\Http\Response
     */
    public function OfficeEdit($id)
    {
        $offices = Office::find($id);
        return view('offices.edit', compact('offices')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\offices  $offices
     * @return \Illuminate\Http\Response
     */
    public function OfficeUpdate(Request $request,$id)
    {
        $request->validate([
            'offices' => 'required',
            'name'=> 'required|max:255',
            'description'=> 'required|max:200',
            'admin_id'=> 'required',
        ]); 

        $offices = Office::find($id);

        $offices->name =  $request->get('name');
        $offices->descripton = $request->get('description');
        $offices->admin_id = $request->get('admin_id');
        $offices->save();

        return redirect('/offices')->with('success', 'offices updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\offices  $offices
     * @return \Illuminate\Http\Response
     */
    public function OfficeDestroy($id)
    {
        $offices = Office::find($id);
        $offices->delete(); 
 
        return redirect('/offices')->with('success', 'offices removed.');
    }
}
