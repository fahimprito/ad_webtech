<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //

    public function APIList(){
        return Product::all();
    }

    public function APIPost(Request $req){
        $product = new Product();
        $product->name = $req->name;
        $product->price = $req->price;
        $product->image = $req->image;
        $product->save();
        return $req;
    }
}
