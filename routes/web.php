<?php

use App\Models\Clas;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class,"class","events"]);

Route::get('/register', [HomeController::class,"register"]);

Route::get('/redirects', [AdminController::class, "index"]);

Route::get('/reservation/{id}', [AdminController::class, "reservation"]);

Route::get('/login', [AdminController::class, "login"]);

Route::get('/deleteclass/{id}', [AdminController::class, "deleteclass"]);

Route::get('/updateview/{id}', [AdminController::class, "updateview"]);

Route::post('/update/{id}', [AdminController::class, "update"]);

Route::get('/classCreate', [AdminController::class, "classCreate"]);

Route::get('/classShow/{id}', [AdminController::class, "classShow"]);

Route::post('/uploadClass',[AdminController::class, "upload"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
 