<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index(){
        $message = "This is home Page";
        return view('hello')->with('message', $message);
    }
    

    public function service(){
        $message = "This is products Page";
        
        $product_name=array("keyboard"=>"2500tk", "Mouse"=>"1100tk", "Monitor"=>"12,000tk");
        return view('product')
        ->with('product_name', $product_name)
        ->with('message', $message);

        // $p1 = new Product("keyboard","2500");
        // $p2 = new Product("Mouse","1100");
        // $p3 = new Product("Monitor","12,000");
        // $productList=array($p1,$p2,$p3);
        // return view('product')->with("productList",$productList);


    }
    
    public function profile(){
        //teampage
        $message = "This is Team Page";
        $name = "Fahim Ahmmed Mojumder";
        $id="19-39488-1";
        $dob = "10-10-2010";
        $names=array("Tamim", "Shanto", "Nur");
        return view('profile')
        ->with('name', $name)
        ->with('id', $id)
        ->with('dob', $dob)
        ->with('names', $names)
        ->with('message', $message);


        
        
    }
    public function aboutus(){
        $message = "This is about Page";
        return view('aboutus')->with('message', $message);
    }


    public function contactus(){
        $message = "This is contact Page";
        return view('contactus')->with('message', $message);
    }


}
