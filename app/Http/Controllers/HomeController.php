<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Basket;
use App\Basket_products;
use Illuminate\Support\Facades\Auth;


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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function indexadmin()
    {
        $totlaSumSale ='';
        $sclads = Auth::user()->mapSclads();
        $products = Product::whereIn('sclad_id', $sclads);
        $user_count = User::all()->count();
        $new_orders_count = Basket::where('status', 100)->whereIn('sclad_id', $sclads)->count();
        $ice = Basket::where('status', 350)->whereIn('sclad_id', $sclads)->count();
        $comleting_count = Basket::where('status', 200)->whereIn('sclad_id', $sclads)->count();
        $sent_count = Basket::where('status', 300)->whereIn('sclad_id', $sclads)->count();
        $comlited_count = Basket::where('status', 400)->whereIn('sclad_id', $sclads)->count();
        $getTotlaSumSale = Basket_products::getTotlaSumSale($totlaSumSale);
    
    
           return view('admin.home.index', [
               'products_count' => $products->count(),
               'products' => $products->get(),
               'user_count' => $user_count,
               'new_orders_count' => $new_orders_count,
               'comleting_count' => $comleting_count,
               'sent_count' => $sent_count,
               'comlited_count' => $comlited_count,
               'getTotlaSumSale' => $getTotlaSumSale,
               'ice' => $ice,

           ]);
       }
    }


