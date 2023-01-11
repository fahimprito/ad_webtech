<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;

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


 
Route::get('/login',[adminController::class,"login"])->name("login")->middleware('loggedin');
Route::post('/login',[adminController::class,"loginSubmitted"])->name("login")->middleware('loggedin');



Route::get('/registration',[adminController::class,"registration"])->name("registration")->middleware('loggedin');
Route::post('/registration',[adminController::class,"registrationSubmitted"])->name("registration")->middleware('loggedin');
Route::get('/logout', [adminController::class,'logout'])->name('logout');

// after login
Route::get('/home',[adminController::class,"home"])->name("home")->middleware('adminvalid');
Route::get('/home',[adminController::class,"studentlist"])->name("home")->middleware('adminvalid');
Route::get('/addstudent',[adminController::class,"addstudent"])->name("addstudent")->middleware('adminvalid');
Route::post('/addstudent',[adminController::class,"addstudentSubmitted"])->name("addstudent")->middleware('adminvalid');
Route::get('/student/edit/{id}',[adminController::class,"studentedit"])->name("studentedit")->middleware('adminvalid');
Route::put('/student/edit/{id}',[adminController::class,"studenteditsubmitted"])->name("studentedit")->middleware('adminvalid');
Route::get('/student/delete/{id}',[adminController::class,"studentdelete"])->name("studentdelete")->middleware('adminvalid');
