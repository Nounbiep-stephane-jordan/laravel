<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\http\controllers\ClientsController;
use App\http\controllers\ClientCategoryController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::get('/clients', [ClientsController::class,'index']);  //get all
Route::post('/clients_store', [ClientsController::class,'store']);  //store
Route::get('/clients_edit/{id}', [ClientsController::class,'edit']); //get edit
Route::put('/clients_update/{id}', [ClientsController::class,'update']); //update
Route::delete('/clients_delete/{id}',[ClientsController::class,'delete']);  //delete


Route::post('/clients_category_add', [ClientCategoryController::class,'store']);  //add new category
Route::get('/clients_category_edit/{id}', [ClientCategoryController::class,'edit']); //get edit
Route::delete('/clients_category_delete/{id}',[ClientCategoryController::class,'delete']);  //delete


