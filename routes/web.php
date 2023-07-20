<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;
use App\Models\User;
use Illuminate\Http\Request;
use Random\Randomizer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('app');
});
*/

Route::get('/home', [IndexController::class, 'index'])->name('home');

Route::get('/show', [IndexController::class, 'yawa']);

Route::get('/login', [Controller::class, 'login']);

Route::get('/create', [AuthController::class, 'createUser'])
->name('create-user');


Route::post('/register.user', [AuthController::class, 'registerUser'])->name('register.user');



Route::post('/login.store', [AuthController::class, 'store'])
->name('login.store');

Route::delete('logout', [AuthController::class, 'destroy'])
->name('logout');

 



