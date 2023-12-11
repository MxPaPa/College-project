<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
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
Route::get('/admin/student-info', [StudentController::class, 'index'])->name('studentinfo');
Route::get('/admin/student-form', [StudentController::class, 'studentform'])->name('student.form');
Route::post('/admin/add-student', [StudentController::class, 'addnewstudent'])->name('add.new.student');
Route::get('/admin/student-edit/{id}', [StudentController::class, 'editstudent'])->name('edit.student');
Route::post('/admin/student/update-profile/{id}', [StudentController::class, 'updateprofile'])->name('students.update');
Route::get('/admin/student/destroy/{id}', [StudentController::class, 'destroy'])->name('destroy');

