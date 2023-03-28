<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrator;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class Administrators extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $administrators = Administrator::all();
 
        return view('administrators.index', compact('administrators'));
    }

    public function listAdmin()
    {
        $administrators = Administrator::all();
 
        return $administrators;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AdminCreate()
    {
       
      $administrators_name = $this->argument('AdministratorsName');
      Administrator::where('name', $administrators_name)
      ->update([
          'role' => 'admin'
      ]);
      echo "Finished"; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function AdminStore(Request $request)
    {
        $validator =  Validator::make($request->all(),[

            'name'=> 'required|unique:administrators|max:255',
            'description'=> 'required|max:255',
        ]);
        
        if ($validator->fails())
         {
            return response()->json($validator->failed(),400);
         }
         
         $data = Administrator::create([
            'name' => $request->name,
            'description' => $request->description,


        ]);

        return response()->json(["message"=>"Admin has been created successfully",$data],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\administrators  $administrators
     * @return \Illuminate\Http\Response
     */
    public function AdminShow($id)
    {
        $administrators = Administrator::find($id);
        return view('administrators.show', compact('administrators')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\administrators  $administrators
     * @return \Illuminate\Http\Response
     */
    public function AdminEdit($id)
    {
        $administrators = Administrator::find($id);
        return view('administrators.edit', compact('administrators')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\administrators  $administrators
     * @return \Illuminate\Http\Response
     */
    public function AdminUpdate(Request $request, $id)
    {
        $request->validate([
            'administrators' => 'required',
            'name'=> 'required|max:20',
            'description'=> 'required|max:20',
            
        ]); 
        $administrators = Administrator::find($id);

        $administrators->name =  $request->get('name');
        $administrators->description = $request->get('description');
        $administrators->save();

        return redirect('/administrators')->with('success', 'administrators updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\administrators  $administrators
     * @return \Illuminate\Http\Response
     */
    public function AdminDestroy($id)
    {
        $administrators = Administrator::find($id);
        $administrators->delete(); 
 
        return redirect('/administrators')->with('success', 'Administrator removed.');
    } 
}
