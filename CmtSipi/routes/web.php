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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/about', 'AboutUs');
    Route::get('/cont', 'contactus');
});

//Teacher
Route::get('/admin/dashboard', [TeacherController::class, 'index'])->name('dashboard');
Route::get('/admin/allteacherinfo', [TeacherController::class, 'allteacherifno'])->name('info');
Route::post('/admin/addnewteacher', [TeacherController::class, 'addnewteacer'])->name('addnew');
Route::get('/admin/add',[TeacherController::class, 'showform'])->name('show');
Route::get('admin/edit/{id}', [TeacherController::class, 'edit'])->name('teachersedit');
Route::post('/admin/update-profile', [TeacherController::class, 'update'])->name('update');
Route::get('/admin/destory/{id}', [TeacherController::class, 'destroy'])->name('deleteprofile');


//controller Students


