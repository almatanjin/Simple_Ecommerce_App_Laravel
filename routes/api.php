<?php

use App\Http\Controllers\Api\EmployeeIndexController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\UserIndexController;
use App\Http\Controllers\Api\UserStoreController;
use Illuminate\Support\Facades\Route;

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

Route::prefix("auth")->group(function () {
    Route::post('login', LoginController::class);
 })->middleware('guest');
          //->middleware('auth:sanctum')
Route::prefix('/')->group(function () {
    
    Route::group(["prefix" => "users"], function () {
        Route::get('/', UserIndexController::class);
       
        
        
    });
    



 });

Route::prefix('/')->group(function () {
    
    Route::group(["prefix" => "employees"], function () {
        Route::get('/', EmployeeIndexController::class);
        Route::post('/',[ EmployeeIndexController::class,'store']);
       
        
        
    });
    



 });