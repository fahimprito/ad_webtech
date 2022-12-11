<?php

namespace App\Http\Controllers;

use App\Models\TokenAPI;
use App\Http\Requests\StoreTokenAPIRequest;
use App\Http\Requests\UpdateTokenAPIRequest;

class TokenAPIController extends Controller
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
     * @param  \App\Http\Requests\StoreTokenAPIRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTokenAPIRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TokenAPI  $tokenAPI
     * @return \Illuminate\Http\Response
     */
    public function show(TokenAPI $tokenAPI)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TokenAPI  $tokenAPI
     * @return \Illuminate\Http\Response
     */
    public function edit(TokenAPI $tokenAPI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTokenAPIRequest  $request
     * @param  \App\Models\TokenAPI  $tokenAPI
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTokenAPIRequest $request, TokenAPI $tokenAPI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TokenAPI  $tokenAPI
     * @return \Illuminate\Http\Response
     */
    public function destroy(TokenAPI $tokenAPI)
    {
        //
    }
}
