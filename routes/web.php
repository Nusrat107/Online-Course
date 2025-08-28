<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'index']);
Route::get('about-us', [FrontendController::class, 'aboutUs']);
Route::get('admission', [FrontendController::class, 'admission']);
Route::get('awards', [FrontendController::class, 'awards']);
Route::get('seminar', [FrontendController::class, 'seminar']);
Route::get('all-courses', [FrontendController::class, 'allCourses']);
Route::get('events', [FrontendController::class, 'events']);
Route::get('students', [FrontendController::class, 'students']);
Route::get('contact-us', [FrontendController::class, 'contactUs']);
Route::get('course-details', [FrontendController::class, 'courseDetails']);
Route::get('db-profile', [FrontendController::class, 'dbProfile']);
Route::get('db-courses', [FrontendController::class, 'dbCourses']);
Route::get('db-exams', [FrontendController::class, 'dbExams']);
Route::get('db-time-line', [FrontendController::class, 'dbTimeLine']);
Route::get('db-time-line', [FrontendController::class, 'dbTimeLine']);
Route::get('event-details', [FrontendController::class, 'eventDetails']);
Route::get('event-register', [FrontendController::class, 'eventRegister']);
Route::get('research', [FrontendController::class, 'research']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

