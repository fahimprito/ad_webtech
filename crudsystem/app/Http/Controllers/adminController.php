<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\student;
use Illuminate\Support\Facades\Hash;
use session;

class adminController extends Controller
{
    //
    function home(){return view('home');}
    function login(){return view('login');}
    function registration(){return view('registration');}

    function registrationSubmitted(Request $request)
    {

         $validate = $request->validate([
            "name"=>"required|regex:/^[A-Z a-z,.-]+$/i",
            "email"=>'required|email',
            "password"=>'required',
        ],
        [
            'name.regex' => 'Name cannot contain special characters or numbers.',
            'email.required'=>"Please Enter your email"]
        );

        $user = new admin();       
        $user->name = $request->name;
        $user->email =$request->email;
        $user->password = hash::make($request->password);
        $res = $user->save();

        if($res)
        {
            return back()->with ('success','You have registered successfully');
        }
        else
        {
            return back()->with ('fail','Somethihng is wrong!');
        }

    }
    function loginSubmitted(Request $request)
    {
        $validate = $request->validate([
            "email"=>'required | email',
            "password"=>'required'
        ],
        [
            'email.required'=>"Please Enter your email",
            'password.required'=>"Please Enter your password"
        ]
        );


        $user=admin::where('email','=',$request->email)->first();
        if($user)
        {
            if(hash::check($request->password,$user->password))
            {
                $request->session()->put('id',$user->id);
                return redirect()->route("home");

            }else{
                return back()->with ('fail','Password is not matches.');
            }
            
        }else{
            return back()->with ('fail','The email is not registered.');
        }

    }

    function logout(){
        session()->flush();
        return redirect()->route("login");
    }  

    function studentlist()
    {
        $data = student::all();
        $data = student::paginate(15);

        return view('home')->with('data', $data);
    }

    //add

    function addstudent()
    {
        return view('admin.addstudent');
    }
    function addstudentSubmitted( Request $request )
    {
        $validate = $request->validate([
            "name"=>"required|regex:/^[A-Z a-z,.-]+$/i",
            "email"=>'required',
        ],
        [
            'name.regex' => 'Name cannot contain special characters or numbers.'
        ]
        );

        $user = new student();
        $user->name = $request->name;
        $user->email = $request->email;
        $res = $user->save();

        if($res)
        {
            return back()->with ('success','New transport added successfully');
        }
        else
        {
            return back()->with ('fail','Somethihng is wrong!');
        }

    }


    //edit
    function studentedit($id)
    {
        $user=student::where('id',$id)->first();
        return view('admin.studentedit',['user'=>$user]);
    }
    function studenteditsubmitted(Request $request, $id)
    {
        $user=student::where('id',$id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect('home');
    }

    //delete
    function studentdelete($id)
    {
        $user=student::where('id',$id)->first();
        $user->delete();
        return redirect('home');
    }

}
