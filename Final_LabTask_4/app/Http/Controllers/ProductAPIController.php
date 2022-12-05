<?php

namespace App\Http\Controllers;

use App\Models\ProductAPI;
use App\Http\Requests\StoreProductAPIRequest;
use App\Http\Requests\UpdateProductAPIRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductAPIController extends Controller
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
     * @param  \App\Http\Requests\StoreProductAPIRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductAPIRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductAPI  $productAPI
     * @return \Illuminate\Http\Response
     */
    public function show(ProductAPI $productAPI)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductAPI  $productAPI
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductAPI $productAPI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductAPIRequest  $request
     * @param  \App\Models\ProductAPI  $productAPI
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductAPIRequest $request, ProductAPI $productAPI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductAPI  $productAPI
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductAPI $productAPI)
    {
        //
    }

    public function list(){
        $products = Product::all();
        return $products;
    }
    public function add(Request $req){
        $pr = new Product();
        //$pr->id = $req->id;
        $pr->name = $req->name;
        $pr->price = $req->price;
        $pr->image = $req->image;
        if($pr->save()) return "Successful";
    }
}
