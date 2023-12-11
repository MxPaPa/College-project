<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function index(){
        $students=Student::all();
        return view('admin.student.allstudentsinfo',compact('students'));
    }
    public function studentform(){
        return view('admin.student.addnewstudnet');
    }
    public function addnewstudent(Request $request){
        $request->validate([
            'college_id' => 'required',
            'name' => 'required',
            'f_name' => 'required',
            'm_name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'gender' => 'required|in:Male,Female,Other',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ],[
        'image.required' => 'The image field is required.',
    ]);

        //  image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('student_images', 'public');
        } else {
            $imagePath = null;
        }

        // Insert data into the database
        Student::insert([
            'college_id' => $request->college_id,
            'name' => $request->name,
            'father_name' => $request->f_name,
            'mother_name' => $request->m_name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'gender'=>$request->gender,
            'image' => $imagePath,
        ]);

        return redirect()->route('studentinfo')->with('message', "Teacher Profile Added Successfully!");
    }
    public function editstudent($id){
        $student=Student::find($id);
        return view('admin.student.editstudent', compact('student'));
    }
    public function updateprofile(Request $request){
        $student_id=$request->student_id;
        $request->validate([
            'college_id' => 'required',
            'name' => 'required',
            'f_name' => 'required',
            'm_name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'gender' => 'required|in:Male,Female,Other',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ],[
        'image.required' => 'The image field is required.',
    ]);

        // Handle image update
        if ($request->hasFile('image')) {

            // Delete the previous image if it exists
            $existingImagePath = Student::find($student_id)->image;

            if ($existingImagePath) {
                Storage::disk('public')->delete($existingImagePath);
            }

            // Upload the new image
            $imagePath = $request->file('image')->store('student_images', 'public');
        }

        // Insert data into the database
        Student::find($student_id)->update([
            'college_id' => $request->college_id,
            'name' => $request->name,
            'father_name' => $request->f_name,
            'mother_name' => $request->m_name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'gender'=>$request->gender,
            'image' => $imagePath,
        ]);

        return redirect()->route('studentinfo')->with('message', "Student Profile Updated Successfully!");
    }
    public function destroy($id){
        Student::find($id)->delete();
        return redirect()->route('studentinfo')->with('message', 'Student Profile Deleted Successfully!');
    }
}
