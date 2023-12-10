<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function showform(){
        return view('admin.addnew');
    }
    public function addnewteacer(Request $request){
        $request->validate([
            'name' => 'required',
            'department' => 'required',
            'instructor' => 'required',
            'email' => 'required|email',
            'phone' => 'required|max:11',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        //  image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('teacher_images', 'public');
        } else {
            $imagePath = null;
        }

        // Insert data into the database
        Teacher::insert([
            'name' => $request->name,
            'department' => $request->department,
            'instructor' => $request->instructor,
            'email' => $request->email,
            'phone' => $request->phone,
            'image' => $imagePath,
        ]);

        return redirect()->route('info')->with('message', "Teacher Profile Added Successfully!");
    }
    public function allteacherifno(){
        $teachers=Teacher::all();
        return view('admin.allteacherslist', compact('teachers'));
    }
    public function edit($id) {
        $teacher = Teacher::find($id);
        return view('admin.edit', compact('teacher'));
    }
    public function update(Request $request) {
        $teacherid = $request->teacher_id;
        $request->validate([
            'name' => 'required',
            'department' => 'required',
            'instructor' => 'required',
            'email' => 'required|email',
            'phone' => 'required|max:11',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;

        // Handle image update
        if ($request->hasFile('image')) {

            // Delete the previous image if it exists
            $existingImagePath = Teacher::find($teacherid)->image;

            if ($existingImagePath) {
                Storage::disk('public')->delete($existingImagePath);
            }

            // Upload the new image
            $imagePath = $request->file('image')->store('teacher_images', 'public');
        }


        Teacher::find($teacherid)->update([
            'name' => $request->name,
            'department' => $request->department,
            'instructor' => $request->instructor,
            'email' => $request->email,
            'phone' => $request->phone,
            'image' => $imagePath,
        ]);

        return redirect()->route('info')->with('message', 'Teacher profile updated successfully');
    }
    public function destroy($id){
        Teacher::find($id)->delete();
        return redirect()->route('info')->with('message', 'Teacher Profile Deleted Successfully!');
    }

}
