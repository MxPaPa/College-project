<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\support\Facades\Redirect;
use Session;

Session_start();

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function AboutUs()
    {
        return view('aboutus');
    }
    public function contactus()
    {
        return view('contactus');
    }
    public function addsubscribe(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
    ]);
    FacadesDB::table('subscribe')->insert([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return Redirect::to('/');
    }

    public function addrequestquote(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'course_name' => 'required',
            'phone' => 'required',

    ]);

    FacadesDB::table('requestquote')->insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'course_name' => $request->course_name,
            'phone' => $request->phone,
        ]);
        return Redirect::to('/');

        // $data=array();
        // $data['id']=$request->id;
        // $data['first_name']=$request->first_name;
        // $data['last_name']=$request->last_name;
        // $data['course_name']=$request->course_name;
        // $data['phone']=$request->phone;


        // echo"<pre>";
        // print_r($data);
        // echo"</pre>";

        // DB::table('requestquot')->insert($data);
        // Session::put('message','Requestquot Added Successfully!!');
        // return Redirect::to('/');





        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'course_name' => 'required',
            'phone' => 'required',

    ]);

        FacadesDB::table('requestquote')->insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'course_name' => $request->course_name,
            'phone' => $request->phone,
        ]);
        return Redirect::to('/');
    }

}
