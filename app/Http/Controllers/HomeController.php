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
        $ice_count = Basket::where('status', 350)->whereIn('sclad_id', $sclads)->count();
        $comleting_count = Basket::where('status', 200)->whereIn('sclad_id', $sclads)->count();
        $sent_count = Basket::where('status', 300)->whereIn('sclad_id', $sclads)->count();
        $comlited_count = Basket::where('status', 400)->whereIn('sclad_id', $sclads)->count();
        $getTotlaSumSale = Basket_products::getTotlaSumSale($totlaSumSale);
        $comlited_count = Basket::where('status', 400)->whereIn('sclad_id', $sclads)->count();
        $ice_summ = Basket::where('status', 350)->whereIn('sclad_id', $sclads);
        $new_orders_summ = Basket::where('status', 100)->whereIn('sclad_id', $sclads);
        $comleting_summ = Basket::where('status', 200)->whereIn('sclad_id', $sclads);
        $sent_summ = Basket::where('status', 300)->whereIn('sclad_id', $sclads);
        $comlited_summ = Basket::where('status', 400)->whereIn('sclad_id', $sclads);

        $new_orders_count1 = Basket::where('status', 100)->where('sclad_id', 1)->count();
        $ice_count1 = Basket::where('status', 350)->where('sclad_id', 1)->count();
        $comleting_count1 = Basket::where('status', 200)->where('sclad_id', 1)->count();
        $sent_count1 = Basket::where('status', 300)->where('sclad_id', 1)->count();
        $comlited_count1 = Basket::where('status', 400)->where('sclad_id', 1)->count();

        $ice_summ1 = Basket::where('status', 350)->where('sclad_id', 1);
        $new_orders_summ1 = Basket::where('status', 100)->where('sclad_id', 1);
        $comleting_summ1 = Basket::where('status', 200)->where('sclad_id', 1);
        $sent_summ1 = Basket::where('status', 300)->where('sclad_id', 1);
        $comlited_summ1 = Basket::where('status', 400)->where('sclad_id', 1);

        $new_orders_count2 = Basket::where('status', 200)->where('sclad_id', 2)->count();
        $ice_count2 = Basket::where('status', 350)->where('sclad_id', 2)->count();
        $comleting_count2 = Basket::where('status', 200)->where('sclad_id', 2)->count();
        $sent_count2 = Basket::where('status', 300)->where('sclad_id', 2)->count();
        $comlited_count2 = Basket::where('status', 400)->where('sclad_id', 2)->count();

        $ice_summ2 = Basket::where('status', 350)->where('sclad_id', 2);
        $new_orders_summ2 = Basket::where('status', 200)->where('sclad_id', 2);
        $comleting_summ2 = Basket::where('status', 200)->where('sclad_id', 2);
        $sent_summ2 = Basket::where('status', 300)->where('sclad_id', 2);
        $comlited_summ2 = Basket::where('status', 400)->where('sclad_id', 2);
    
           return view('admin.home.index', [
               'products_count' => $products->count(),
               'products' => $products->get(),
               'user_count' => $user_count,
               'new_orders_count' => $new_orders_count,
               'comleting_count' => $comleting_count,
               'sent_count' => $sent_count,
               'comlited_count' => $comlited_count,
               'getTotlaSumSale' => $getTotlaSumSale,
               'ice_count' => $ice_count,
               'ice_summ' => $ice_summ->get(),
               'new_orders_summ' => $new_orders_summ->get(),
               'comleting_summ' => $comleting_summ->get(),
               'sent_summ' => $sent_summ->get(),
               'comlited_summ' => $comlited_summ->get(),
               'sclads' => $sclads,

               'new_orders_count1' => $new_orders_count1,
               'comleting_count1' => $comleting_count1,
               'sent_count1' => $sent_count1,
               'comlited_count1' => $comlited_count1,
               'ice_count1' => $ice_count1,
               'ice_summ1' => $ice_summ1->get(),
               'new_orders_summ1' => $new_orders_summ1->get(),
               'comleting_summ1' => $comleting_summ1->get(),
               'sent_summ1' => $sent_summ1->get(),
               'comlited_summ1' => $comlited_summ1->get(),


               'new_orders_count1' => $new_orders_count1,
               'comleting_count1' => $comleting_count1,
               'sent_count1' => $sent_count1,
               'comlited_count1' => $comlited_count1,
               'ice_count1' => $ice_count1,
               'ice_summ1' => $ice_summ1->get(),
               'new_orders_summ1' => $new_orders_summ1->get(),
               'comleting_summ1' => $comleting_summ1->get(),
               'sent_summ1' => $sent_summ1->get(),
               'comlited_summ1' => $comlited_summ1->get(),





           ]);
       }
    }


