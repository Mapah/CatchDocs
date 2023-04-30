<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\adduserController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Client\Request as ClientRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::post('/login', function(ClientRequest $request){
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

    }  
});


Route::get('/logout', function(){
    return view('views.login');
});

Route::get('login', function () {
    return view('views.login');
});

Route::get('settings', function () {
    return view('views.settings');
});

Route::get('office', function () {
    return view('views.office');
});

Route::get('administration', function () {
    return view('views.administration');
});

Route::get('acceuil', function () {
    return view('views.acceuil');
});

Route::get('consulter', function () {
    return view('views.consulter');
});

Route::get('research', function () {
    return view('views.research');
});
Route::get('addUser', function () {
    return view('views.addUser');
});
Route::get('addOffice', function () {
    return view('views.addOffice');
});
Route::get('addAdministration', function () {
    return view('views.addAdministration');
});
Route::get('modifyOffice', function () {
    return view('views.modifyOffice',['office' => null]);
});
Route::get('modifyAdministration', function () {
    return view('views.modifyAdministration');
});
Route::get('/home', function () {
    return view('views.settings');
    // return view('views.homepage');
});
Auth::routes();

Route::get('modifyUser/{id}',  [App\Http\Controllers\addUserController::class, 'modifyUser'])->name('modifyUser');
Route::post('/ajout',[App\Http\Controllers\addUserController::class, 'adduser'])->name('ajout');
Route::post('update',[App\Http\Controllers\addUserController::class, 'modify'])->name('modify');
Route::get('delete/{id}',[App\Http\Controllers\addUserController::class, 'delete'])->name('delete');
Route::get('/user',[userController::class,'index']);
Route::get('/documents',[adduserController::class,'documents']);
Route::get('/addDocument',[adduserController::class,'addDocument']);
Route::POST('/save_addDocument',[adduserController::class,'save_addDocument']);
Route::prefix('Acceuil')->namespace('App\Http\Controllers\AcceuilController')->group(function(){
    Route::get('/','AcceuilController@index')->name('Acceuil');
});


// Route::get('/home',  [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('modifyadministration /{id}',  [App\Http\Controllers\addUserController::class, 'modifyadministration '])->name('modifyadministration ');
// Route::get('modifyOffice/{id}',  [App\Http\Controllers\addUserController::class, 'modifyOffice'])->name('modifyOffice');

// Route::get('ViewDocs', function () {
//     return view('ViewDocs');
// });

// Route::get('TableDocs', function () {
//     return view('TableDocs');
// });

// Route::get('admin-dash-layout', function () {
//     return view('admin-dash-layout');
// });

// Route::get('settings', function () {
//     return view('views.settings');
// });

// Route::get('/user',[userController::class,'user'] );

