<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function addnewteacer(Request $request){
        // Teacher::insert([
        //     'name'=>$request->name,
        //     'department'=>$request->department,
        //     'email'=>$request->email,
        //     'phone'=>$request->phone,
        // ]);
        return view('admin.addnew');
    }
    public function allteacherifno(){
        return view('admin.allteacherslist');
    }
}
