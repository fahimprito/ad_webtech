<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index(){
        $message = "Welcome Using Variable";
        return view('hello')->with('message', $message);
    }
    

    public function service(){
        $message = "Welcome Using Variable";
        return view('product')->with('message', $message);
    }
    
    public function profile(){
        $name = "Fahim Ahmmed Mojumder";
        $id="11-11111-1";
        $dob = "10-10-2010";
        $names=array("Mr. X", "Mr. Y", "Mr. Z");
        return view('profile')
        ->with('name', $name)
        ->with('id', $id)
        ->with('dob', $dob)
        ->with('names', $names); 
    }



}
