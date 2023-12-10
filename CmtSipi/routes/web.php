<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'AboutUs']);
Route::get('/cont', [HomeController::class, 'contactus']);

//Teacher
Route::get('/admin/dashboard', [TeacherController::class, 'index'])->name('dashboard');
Route::get('/admin/allteacherinfo', [TeacherController::class, 'allteacherifno'])->name('info');
Route::get('/admin/addnewteacher', [TeacherController::class, 'addnewteacer'])->name('addnew');
//controller Students


