<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
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

        // echo"<pre>";
        //  print_r($data);
        //  echo"</pre>";

        DB::table('subscribe')->insert([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return Redirect::to('/');
    }
}
