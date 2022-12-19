<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EditCategoryController;
use App\Http\Controllers\StoreCategoryController;
use App\Http\Controllers\UpdateCategoryController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
     
        $users = User::all();

        return view('dashboard',['users' => $users]);
    })->name('dashboard');
});
Route::get("/category/all",CategoryController::class)->name('category');
Route::post("/category/all", StoreCategoryController::class)->name('store.category');
Route::get('/category/edit/{id}', EditCategoryController::class)->name('edit.category');
Route::get('/category/edit/{id}', UpdateCategoryController::class)->name('update.category');