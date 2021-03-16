<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\SlidersHome;
class IndexController extends Controller

{

    public function index(){
        $user = Auth::user();
        
        $products = Product::orderBy('id','desc')->take('9')->get();

        $sliders = SlidersHome::orderBy('id')->get();

        return view('home.index', [
            'products' => $products,
            'user' => $user,
            'sliders' => $sliders,

                                  ]);
    }
}