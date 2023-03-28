<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AcceuilController;
use App\Http\Controllers\userController;
use App\Models\user;

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


Route::get('ViewDocs', function () {
    return view('ViewDocs');
});

Route::get('TableDocs', function () {
    return view('TableDocs');
});

Route::get('admin-dash-layout', function () {
    return view('admin-dash-layout');
});

Route::get('settings', function () {
    return view('settings');
});

Route::get('/user',[userController::class,'user'] );


Route::get('office', function () {
    return view('office');
});

Route::get('administration', function () {
    return view('administration');
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
Route::get('addUser', function () {
    return view('addUser');
});
Route::get('addOffice', function () {
    return view('addOffice');
});
Route::get('addAdministration', function () {
    return view('addAdministration');
});
Route::get('modifyOffice', function () {
    return view('modifyOffice');
});
Route::get('modifyAdministration', function () {
    return view('modifyAdministration');
});
Auth::routes();

Route::get('/home',  [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('modifyUser/{id}',  [App\Http\Controllers\addUserController::class, 'modifyUser'])->name('modifyUser');
// Route::get('modifyOffice/{id}',  [App\Http\Controllers\addUserController::class, 'modifyOffice'])->name('modifyOffice');
// Route::get('modifyadministration /{id}',  [App\Http\Controllers\addUserController::class, 'modifyadministration '])->name('modifyadministration ');
Route::post('/ajout',[App\Http\Controllers\addUserController::class, 'adduser'])->name('ajout');
Route::post('update',[App\Http\Controllers\addUserController::class, 'modify'])->name('modify');
Route::get('delete/{id}',[App\Http\Controllers\addUserController::class, 'delete'])->name('delete');
Route::get('/user',[userController::class,'index']);
// Route::get('/', [AcceuilController::class, 'index']);
Route::prefix('Acceuil')->namespace('App\Http\Controllers\AcceuilController')->group(function(){
    Route::get('/','AcceuilController@index')->name('Acceuil');
});