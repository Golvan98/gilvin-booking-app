<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;
use App\Models\Professional;
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

//Route::get('/show', [IndexController::class, 'yawa']);

Route::get('/login', [Controller::class, 'login'])->name('login');

Route::get('/createUser', [AuthController::class, 'createUser'])
->name('create-user');

Route::get('/createProfessional', [AuthController::class, 'createProfessional'])->name('create-professional');

Route::post('/register.professional', [AuthController::class, 'registerProfessional'])->name('register-professional');

Route::post('/register.user', [AuthController::class, 'registerUser'])->name('register.user');



Route::post('/login.store', [AuthController::class, 'store'])
->name('login.store');

Route::delete('logout', [AuthController::class, 'destroy'])
->name('logout');

Route::get('/userProfile', [UserController::class, 'userProfile'])->name('user.profile')->middleware('auth');
Route::post('/editProfile', [UserController::class, 'editProfile'])->name('edit.user');
Route::delete('/deleteUser', [UserController::class, 'deleteUser'])->name('delete.user');


Route::get('/professionalProfile', [ProfessionalController::class, 'professionalProfile'])->name('professional.profile');
Route::post('/test', [ProfessionalController::class, 'test'])->name('edit.professional');
Route::delete('/deleteProfessional', [ProfessionalController::class, 'deleteProfessional'])->name('deleteProfessional');
Route::post('/addservice', [ProfessionalController::class, 'addService'])->name('add.service');

Route::get('/test/{professional}', [IndexController::class, 'test'])->name('test');





