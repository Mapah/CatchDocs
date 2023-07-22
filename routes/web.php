<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\BureauController;

use App\Http\Controllers\SPUsersController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminBureauController;
use App\Http\Controllers\Admin\AdminDocumentController;
use App\Http\Controllers\Chef_Bureau\ChefBureauController;
use App\Http\Controllers\Chef_Bureau\ChefBureauUserController;
use App\Http\Controllers\Chef_Bureau\ChefBureauDocumentController;


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
Route::get('/translate', [GuestController::class,'translate']);
Route::group(['middleware' => 'language'],function () {
    Route::get('/', [GuestController::class,'index']);
});

Route::get('/redirects', [ConController::class,'index']);
Route::get('/requests', [ConController::class,'index']);
// admin routes

Route::group(['middleware' => 'auth'], function(){



    //super admin route
    Route::get('/super_admin_dashboard', function () {
        return view('super_admin.dashboard');
    });


    // users
            Route::get('/users', [SPUsersController::class,'index']);
            Route::get('/user/create', [SPUsersController::class,'create']);
            Route::post('/user/store', [SPUsersController::class,'store']);
            Route::post('/user/delete', [SPUsersController::class,'delete']);

           // Administration
        Route::get('/administrations', [AdministrationController::class,'index']);
        Route::get('/administration/create', [AdministrationController::class,'create']);
        Route::get('/administration/edit/{id}', [AdministrationController::class,'edit']);
        Route::post('/administration/update', [AdministrationController::class,'update']);
        Route::post('/administration/store', [AdministrationController::class,'store']);
        Route::get('/administration/delete', [AdministrationController::class,'delete']);
        Route::get('/add_admin_to_administration/{id}', [AdministrationController::class,'add_admin']);
        Route::post('/save_add_admin_to_administration', [AdministrationController::class,'save_admin']);

         // Bureau
         Route::get('/bureaux', [BureauController::class,'index']);
         Route::get('/bureau/create', [BureauController::class,'create']);
         Route::get('/bureau/edit/{id}', [BureauController::class,'edit']);
         Route::post('/bureau/update', [BureauController::class,'update']);
         Route::post('/bureau/store', [BureauController::class,'store']);
         Route::get('/bureau/delete', [BureauController::class,'delete']);
         Route::get('/add_chef_bureau_to_bureau/{id}', [BureauController::class,'add_chef_bureau']);
         Route::post('/save_add_chef_bureau_to_bureau', [BureauController::class,'save_chef_bureau']);

         // Document
         Route::get('/document', [DocumentController::class,'index']);
         Route::get('/document/create', [DocumentController::class,'create']);
         Route::get('/document/edit/{id}', [DocumentController::class,'edit']);
         Route::post('/document/update', [DocumentController::class,'update']);
         Route::post('/document/store', [DocumentController::class,'store']);
         Route::get('/document/delete', [DocumentController::class,'delete']);
         Route::get('/print_document/{id}', [DocumentController::class,'print']);

    //         Route::get('/settings', [SettingsController::class,'index']);
    //         Route::get('/settings/create', [SettingsController::class,'create']);
    //         Route::post('/settings/store', [SettingsController::class,'store']);
    //         Route::get('/settings/edit/{id}', [SettingsController::class,'edit']);
    //         Route::post('/settings/update', [SettingsController::class,'update']);


    // admin route
    Route::get('/admin_dashboard', function () {
        return view('admin.dashboard');
    });

     // users
     Route::get('/admin_users', [AdminUserController::class,'index']);
     Route::get('/admin_user/create', [AdminUserController::class,'create']);
     Route::post('/admin_user/store', [AdminUserController::class,'store']);
     Route::post('/admin_user/delete', [AdminUserController::class,'delete']);

    // Administration
 Route::get('/admin_administrations', [AdminController::class,'index']);

  // Bureau
  Route::get('/admin_bureaux', [AdminBureauController::class,'index']);
  Route::get('/admin_bureau/create', [AdminBureauController::class,'create']);
  Route::get('/admin_bureau/edit/{id}', [AdminBureauController::class,'edit']);
  Route::post('/admin_bureau/update', [AdminBureauController::class,'update']);
  Route::post('/admin_bureau/store', [AdminBureauController::class,'store']);
  Route::get('/admin_bureau/delete', [AdminBureauController::class,'delete']);
  Route::get('/admin_add_chef_bureau_to_bureau/{id}', [AdminBureauController::class,'add_chef_bureau']);
  Route::post('/admin_save_add_chef_bureau_to_bureau', [AdminBureauController::class,'save_chef_bureau']);

  // Document
  Route::get('/admin_document', [AdminDocumentController::class,'index']);
  Route::get('/admin_document/create', [AdminDocumentController::class,'create']);
  Route::get('/admin_document/edit/{id}', [AdminDocumentController::class,'edit']);
  Route::post('/admin_document/update', [AdminDocumentController::class,'update']);
  Route::post('/admin_document/store', [AdminDocumentController::class,'store']);
  Route::get('/admin_document/delete', [AdminDocumentController::class,'delete']);
  Route::get('/admin_print_document/{id}', [AdminDocumentController::class,'print']);

    // admin route
    Route::get('/chef_bureau_dashboard', function () {
        return view('chef_bureau.dashboard');
    });
     // users
     Route::get('/chef_bureau_users', [ChefBureauUserController::class,'index']);
     Route::get('/chef_bureau_user/create', [ChefBureauUserController::class,'create']);
     Route::post('/chef_bureau_user/store', [ChefBureauUserController::class,'store']);
     Route::post('/chef_bureau_user/delete', [ChefBureauUserController::class,'delete']);

    // Administration
 Route::get('/chef_bureau_administrations', [ChefBureauController::class,'index']);

  // Bureau
  Route::get('/chef_bureau_bureaux', [ChefBureauController::class,'index']);

  // Document
  Route::get('/chef_bureau_document', [ChefBureauDocumentController::class,'index']);
  Route::get('/chef_bureau_document/create', [ChefBureauDocumentController::class,'create']);
  Route::get('/chef_bureau_document/edit/{id}', [ChefBureauDocumentController::class,'edit']);
  Route::post('/chef_bureau_document/update', [ChefBureauDocumentController::class,'update']);
  Route::post('/chef_bureau_document/store', [ChefBureauDocumentController::class,'store']);
  Route::get('/chef_bureau_document/delete', [ChefBureauDocumentController::class,'delete']);
  Route::get('/chef_bureau_print_document/{id}', [ChefBureauDocumentController::class,'print']);

});

require __DIR__.'/auth.php';
