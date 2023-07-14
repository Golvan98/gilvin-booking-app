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

Route::get('/home', [IndexController::class, 'index']);

Route::get('/show', [IndexController::class, 'yawa']);

//Route::get('/login', [Controller::class, 'login']);

Route::get('/register', [Controller::class, 'register']);

Route::get('/login', [AuthController::class, 'create'])
->name('login');

Route::post('/login.store', [AuthController::class, 'store'])
->name('login.store');

Route::delete('logout', [AuthController::class, 'destroy'])
->name('logout');

 



