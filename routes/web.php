<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentRequestController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;
use App\Models\Appointment;
use App\Models\Professional;
use App\Models\User;
use App\Models\AppointmentRequest;
use Illuminate\Http\Request;
use Random\Randomizer;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\NotificationSeenController;
use App\Http\Controllers\ProfessionalNotificationSeenController;

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

Route::put('/professionalNotification/{notification}/seen', NotificationSeenController::class)->middleware('checkProfessionalGuard');

Route::put('/notification/{notification}/seen', NotificationSeenController::class)->middleware('auth');


//Route::put('/professionalNotifications/{notification}/seen', ProfessionalNotificationSeenController::class)->name('professional.notification.seen');


Route::get('/notifications', [NotificationController::class, 'notification']);

Route::get('/professionalNotifications', [NotificationController::class, 'professionalNotifications']);

Route::get('/home', [IndexController::class, 'index'])->name('home');

//Route::get('/show', [IndexController::class, 'yawa']);

Route::get('/login', [Controller::class, 'login'])->name('login');
Route::get('/testpage', [Controller::class, 'testpage'])->name('test.page');

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
Route::get('/viewUserProfile/{viewUser}', [UserController::class, 'viewUserProfile'])->name('view.user.profile');
Route::post('/editProfile', [UserController::class, 'editProfile'])->name('edit.user');
Route::delete('/deleteUser', [UserController::class, 'deleteUser'])->name('delete.user');
Route::post('/editUserBio', [UserController::class, 'editUserBio'])->name('edit.user.bio');
//Route::post('/uploadUserProfilePic/{currentUser}', [UserController::class, 'uploadUserProfilePic'])->name('upload.user.profile');
Route::post('/uploadUserProfilePic/{currentUser}', [UserController::class, 'uploadUserProfilePic'])->name('upload.user.profile');



Route::get('/professionalProfile', [ProfessionalController::class, 'professionalProfile'])->name('professional.profile');
Route::get('/viewProfessionalProfile/{viewProfessional}', [ ProfessionalController::class, 'viewProfessionalProfile'])->name('view.professional.profile');
Route::post('/editProfessional', [ProfessionalController::class, 'editProfessional'])->name('edit.professional');
Route::delete('/deleteProfessional', [ProfessionalController::class, 'deleteProfessional'])->name('deleteProfessional');
Route::post('/addservice', [ProfessionalController::class, 'addService'])->name('add.service');
Route::post('/uploadProfilePic/{professional}', [ProfessionalController::class, 'uploadProfilePic'])->name('upload.profile');
Route::get('/Professionals', [ProfessionalController::class, 'showProfessionals'])->name('show.professionals');


Route::get('/Professionals', [ProfessionalController::class, 'showProfessionals'])->name('filter.professionals');

Route::get('/test/{professional}', [IndexController::class, 'test'])->name('test');

Route::post('/bioEdit', [ProfessionalController::class, 'bioEdit'])->name('bioEdit');


Route::get('/rejectRequest/{appointmentrequest}', [AppointmentRequestController::class, 'rejectRequest'])->name('reject.request');
Route::get('/approveRequest/{appointmentrequest}', [AppointmentRequestController::class, 'acceptRequest'])->name('approve.request');
Route::get('/deleteRequest/{appointmentrequest}', [AppointmentRequestController::class, 'deleteRequest'])->name('delete.request');
Route::post('/editRequest/{appointmentrequest}', [AppointmentRequestController::class, 'editRequest'])->name('edit.request');
Route::post('/createRequest/{Professional}', [AppointmentRequestController::class, 'createRequest'])->name('create.request');

Route::get('/cancelAppointment/{appointment}', [AppointmentController::class, 'cancelAppointment'])->name('cancel.appointment');




