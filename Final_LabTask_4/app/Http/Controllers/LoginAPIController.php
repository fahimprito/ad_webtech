<?php

namespace App\Http\Controllers;

use App\Models\LoginAPI;
use App\Http\Requests\StoreLoginAPIRequest;
use App\Http\Requests\UpdateLoginAPIRequest;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Token;
use Illuminate\Support\Str;
use DateTime;

class LoginAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLoginAPIRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoginAPIRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoginAPI  $loginAPI
     * @return \Illuminate\Http\Response
     */
    public function show(LoginAPI $loginAPI)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoginAPI  $loginAPI
     * @return \Illuminate\Http\Response
     */
    public function edit(LoginAPI $loginAPI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoginAPIRequest  $request
     * @param  \App\Models\LoginAPI  $loginAPI
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoginAPIRequest $request, LoginAPI $loginAPI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoginAPI  $loginAPI
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoginAPI $loginAPI)
    {
        //
    }

    public function  login(Request $req){

        $user = Customer::where('name',$req->username)->where('password',$req->password)->first();

        if($user){
            $api_token = Str::random(64);
            $token = new Token();
            $token->userid = $user->id;
            $token->token = $api_token;
            $token->created_at = new DateTime();
            $token->save();
            return $token;
        }
        return "No user found";

        

    }
    public function  logout(Request $req){

        $token = Token::where('token',$req->token)->first();
        if($token){
            $token->expired_at =new DateTime();
            $token->save();
            return $token;
        }

    }
}
