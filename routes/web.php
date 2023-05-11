<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\adduserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin-dash-layout', function () {
    return view('admin-dash-layout');
});

Route::get('settings', function () {
    return view('settings');
});

Route::get('acceuil', function () {
    return view('acceuil');
});

Route::get('consulter', function () {
    return view('consulter');
});

Route::get('research', function () {
    return view('research');
});

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