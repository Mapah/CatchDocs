<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConController extends Controller
{
    public function index(){
        // dd('ffff');
        $user=Auth::user();
        // dd($user->role);
        if($user->role=="SUPER_ADMIN"){
            //  dd('kk123');
            return redirect('/super_admin_dashboard');
        }elseif($user->role=="ADMIN"){
            // dd('ffff123');
            return redirect('/admin_dashboard');
        }else{return redirect('/chef_bureau_dashboard');}
    }
}
