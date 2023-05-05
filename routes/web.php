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

// <<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});


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
// =======
Route::get('/', function () {
    return view('acceuil');
});

Route::get('admin-dash-layout', function () {
    return view('admin-dash-layout');
// >>>>>>> mapah
});

Route::get('settings', function () {
    return view('views.settings');
});

// <<<<<<< HEAD
Route::get('office', function () {
    return view('views.office');
});

Route::get('administration', function () {
    return view('views.administration');
});

Route::get('acceuil', function () {
    return view('views.acceuil');
// =======
Route::get('welcome', function () {
    return view('welcome');
// >>>>>>> mapah
});

Route::get('consulter', function () {
    return view('views.consulter');
});

Route::get('research', function () {
    return view('views.research');
});
// <<<<<<< HEAD
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
// =======

Route::get('homepage', function () {
    return view('homepage');
});
Auth::routes();

Route::get('/home',  [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user',[userController::class,'index']);
Route::get('/user',[userController::class,'user'] );
Route::get('/addUser',[addUserController::class,'addUser']);
Route::post('/ajout',[App\Http\Controllers\addUserController::class, 'saveuser'])->name('ajout');
Route::get('modifyUser/{id}',  [App\Http\Controllers\addUserController::class, 'modifyUser'])->name('modifyUser');
// >>>>>>> mapah
Route::post('update',[App\Http\Controllers\addUserController::class, 'modify'])->name('modify');
Route::get('delete/{id}',[App\Http\Controllers\addUserController::class, 'delete'])->name('delete');

Route::get('/administration',[addUserController::class,'administration']);
Route::get('/addAdministration',[adduserController::class,'addAdministration']);
Route::get('/saveAdministration',[adduserController::class,'saveAdministration']);
Route::get('modifyAdministration/{id}',  [App\Http\Controllers\addUserController::class, 'modifyAdministration'])->name('modifyAdministration');
Route::post('updateAdministration',[App\Http\Controllers\addUserController::class, 'updateAdministration'])->name('updateAdministration');
Route::get('deleteAdministration/{id}',[App\Http\Controllers\addUserController::class, 'deleteAdministration'])->name('deleteAdministration');


Route::get('/documents',[adduserController::class,'documents']);
Route::get('/addDocument',[adduserController::class,'addDocument']);
Route::POST('/save_addDocument',[adduserController::class,'save_addDocument']);
Route::get('modifyDocument',[App\Http\Controllers\addUserController::class, 'modifyDocument'])->name('modifyDocument');
Route::post('updateDocument',[App\Http\Controllers\addUserController::class, 'updateDocument'])->name('updateDocument');
Route::get('deleteDocument/{id}',[App\Http\Controllers\addUserController::class, 'deleteDocument'])->name('deleteDocument');


Route::get('/office',[adduserController::class,'office']);
Route::get ('/addOffice',[adduserController::class,'addOffice']);
Route::POST('/saveOffice',[adduserController::class,'saveOffice']);
Route::get('/modifyOffice/{id}',[App\Http\Controllers\addUserController::class, 'modifyOffice'])->name('modifyOffice');
Route::post('updateOffice',[App\Http\Controllers\addUserController::class, 'updateOffice'])->name('updateOffice');
Route::get('deleteOffice/{id}',[App\Http\Controllers\addUserController::class, 'deleteOffice'])->name('deleteOffice');




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