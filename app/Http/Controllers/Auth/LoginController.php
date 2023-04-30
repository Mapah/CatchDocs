<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        $validator= Validator::make($request->all(), [
            'email' => 'required|max:255',
            'password' => 'required',
        ]);
        if($validator->fails()){
            return response()->json([$validator->errors()->all()],409);
        }
        else{
            $login = $request -> only('email', 'password');

            if(!Auth::attempt($login)){
                return response(['message' => 'Invalide login credential!'], 401); 
            }
            /**
             * @var User $user
             */
            $user = Auth::user();
            $token = $user->createToken($user->name);
    
            // Log::info("user");
            // Log::info($user);

            // return response([
            //     'id' => $user->id,
            //     'name' => $user->name,
            //     'email' => $user->email,
            //     'profile' => $user->profile,
            //     'office_id' => $user->office_id,
            //     'haveRole' => $user ->haveRole,
            //     'created_at' => $user->created_at,
            //     'update_at' => $user->update_at,
            //     'token' => $token->accessToken,
            //     // 'token_expires_at' => $token->token->expires_at,
            // ], 200);
        }  
    }
}
