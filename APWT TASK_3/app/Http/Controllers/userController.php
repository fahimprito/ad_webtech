<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    public function login()
    {
        return view('loginpages.login');
    }

    public function loginSubmitted(Request $request)
    {
        $validate = $request->validate([
            "email"=>'required | email',
            "password"=>'required | min:7'
        ],
        ['email.required'=>"Please Enter your email",
         'password.required'=>"Please Enter your password"
        ]
    );
        return $request;
    }



    public function registration(){
        return view('loginpages.registration');
    }

    public function registrationSubmitted(Request $request){
        $validate = $request->validate([
            "firstname"=>'required|min:2|max:20',
            "lastname"=>'required|min:2|max:20',
            "email"=>'required|email',
            "password"=>'required|min: 8',
            "gender"=>'required',
            "dob"=>'required',
            "phone"=>'required |numeric |min:10 |regex:/^([0-9\s\-\+\(\)]*)$/'
        ],
        ['email.required'=>"Please Enter your email"]
    );
        return $request;
    }


    public function contact(){
        $message = "This is contact Page";
        return view('loginpages.contact')->with('message', $message);
    }
    public function contactSubmitted(Request $request)
    {
        $validate = $request->validate([
            "name"=>'required | min:3 | max:7' ,
            "email"=>'required | email',
            "subject"=>'required | min:5',
            "message"=>'required | string'
        ],
        ['name.required'=>"Please Enter your name",
         'email.required'=>"Please Enter your email"
        ]
    );
    return $request;
    }
}
