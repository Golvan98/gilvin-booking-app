<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


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

Route::get('/login', [Controller::class, 'login']);

Route::get('/register', [Controller::class, 'register']);