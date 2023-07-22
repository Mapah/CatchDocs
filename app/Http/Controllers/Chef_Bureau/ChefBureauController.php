<?php

namespace App\Http\Controllers\Chef_Bureau;

use App\Models\Bureau;
use Illuminate\Http\Request;
use App\Models\Administration;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ChefBureauController extends Controller
{
    //
    public function index(Request $request)
    {
        // $request->session()->reflash();
        if (session('status')) {
            $request->session()->now("status",session('status'));
        }
        if (session('error')) {
            $request->session()->now("error",session('error'));
        }
        $user=Auth::user();

        $bureau=Bureau::where('user_id',$user->id)->first();
        $administrations=Administration::where('id',$bureau->administration_id)->get();
        return view('chef_bureau.administrations.index',[
            'administrations'=>$administrations,
        ]);
    }

    public function index_b(Request $request)
    {
        // $request->session()->reflash();
        if (session('status')) {
            $request->session()->now("status",session('status'));
        }
        if (session('error')) {
            $request->session()->now("error",session('error'));
        }
        $user=Auth::user();

        $bureaux=Bureau::where('user_id',$user->id)->get();
        return view('chef_bureau.bureaux.index',[
            'bureaux'=>$bureaux,
        ]);

    }
}
