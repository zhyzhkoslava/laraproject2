<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {


        $products = Product::with('product_images')->get();

        //dd($products);

        return view('home')->with(['products'=>$products]);

    }

    public function getProduct ($id){
        $product = Product::select(['id', 'name', 'price', 'description'])->where('id', $id)->with('product_images')->first();
            //dd($product);
        return view('home')->with(['product' => $product]);
    }
}
