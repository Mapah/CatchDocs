<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    //
    public function index()
    {
        return redirect()->route('login');
    }


    public function translate(Request $request)
    {
        session(['lang' => $request->lang]);
        return redirect($_SERVER['HTTP_REFERER']);
    }

}
