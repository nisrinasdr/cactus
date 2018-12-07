<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $produks=Product::all();
        return view('index',compact('produks'));
    }

    public function produks()
    {
        $produks=Product::all();
        return view('produk',compact('produks'));
    }

    public function produk()
    {

        return view('front.shirt',compact('product'));
    }
}
