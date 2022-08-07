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

Route::post('/classreg/{id}', [HomeController::class, "classreg"]);

Route::get('/register', [HomeController::class,"register"]);

Route::get('/reservation/{id}', [HomeController::class, "reservation"]);

Route::get('/redirects', [AdminController::class, "index"]);

Route::get('/adminReserve', [AdminController::class, "adminReserve"]);

Route::get('/login', [AdminController::class, "login"]);

Route::get('/deleteclass/{id}', [AdminController::class, "deleteclass"]);

Route::get('/deletereserve/{id}', [AdminController::class, "deletereserve"]);

Route::get('/deletereserveall', [AdminController::class, "deletereserveall"]);

Route::get('/updateview/{id}', [AdminController::class, "updateview"]);

Route::post('/update/{id}', [AdminController::class, "update"]);

Route::get('/classCreate', [AdminController::class, "classCreate"]);

Route::get('/classShow/{id}', [AdminController::class, "classShow"]);

Route::post('/uploadClass',[AdminController::class, "upload"]);

Route::get('/success', function () {
    return view('success');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
 