<?php
use App\Models\Documents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrators;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\api\DocumentsController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['prefix'=>'document'],function ()
{
    Route::post('/upload_file',[DocumentsController::class,'FileStore']);
    Route::get('/',[DocumentsController::class,'index']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});


Route::post('/login',[LoginController::class,'login']);


Route::get('/administrations',[Administrators::class,'listAdmin'])->middleware('auth:api');

Route::post('/administrations',[Administrators::class,'AdminCreate']);

Route::post('/administrations',[Administrators::class,'AdminStore']);

Route::post('/administrations',[Administrators::class,'AdminShow']);

Route::put('/administrations',[Administrators::class,'AdminUpdate']);

Route::delete('/administrations',[Administrators::class,'AdminDestroy']);




Route::post('/offices',[OfficeController::class,'OfficeCreate']);

Route::post('/offices',[OfficeController::class,'OfficeStore']);

Route::post('/offices',[OfficeController::class,'OfficeShow']);

Route::put('/offices',[OfficeController::class,'OfficeUpdate']);

Route::delete('/offices',[OfficeController::class,'OfficeDestroy']);

// Route::get('/documents',[adduserController::class,'documents']);
// Route::get('/addDocument',[adduserController::class,'addDocument']);
// Route::POST('/save_addDocument',[adduserController::class,'save_addDocument']);
// Route::get('modifyDocument',[App\Http\Controllers\addUserController::class, 'modifyDocument'])->name('modifyDocument');
// Route::post('updateDocument',[App\Http\Controllers\addUserController::class, 'updateDocument'])->name('updateDocument');
// Route::get('deleteDocument/{id}',[App\Http\Controllers\addUserController::class, 'deleteDocument'])->name('deleteDocument');

Route::get('/administration',[addUserController::class,'administration']);


