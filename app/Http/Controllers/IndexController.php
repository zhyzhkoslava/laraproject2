<?php

namespace App\Http\Controllers;

use App\Product;
use App\Product_image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class IndexController extends Controller
{
//    public function index() {
//
//        return view('welcome');
//
//    }

    public function index() {


        $products = Product::with('product_images')->get();

        return view('home')->with(['products'=>$products]);

    }

//    public function getProduct ($id){
//        $product = Product::select(['id', 'name', 'price', 'description'])->where('id', $id)->with('product_images')->first();
//        dd($product);
//        return view('home')->with(['product' => $product]);
//    }
}
