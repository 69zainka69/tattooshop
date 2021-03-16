<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Basket;
use App\Basket_products;
use App\Sclad;
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
        $sclads = Auth::user()->mapSclads();
        $products = Product::whereIn('sclad_id', $sclads);
        $user_count = User::all()->count();
        $new_orders_count = Basket::where('status', 100)->whereIn('sclad_id', $sclads)->count();
        $ice_count = Basket::where('status', 350)->whereIn('sclad_id', $sclads)->count();
        $comleting_count = Basket::where('status', 200)->whereIn('sclad_id', $sclads)->count();
        $sent_count = Basket::where('status', 300)->whereIn('sclad_id', $sclads)->count();
        $comlited_count = Basket::where('status', 400)->whereIn('sclad_id', $sclads)->count();
        $getTotlaSumSale = Basket_products::getTotlaSumSale($sclads);
        $comlited_count = Basket::where('status', 400)->whereIn('sclad_id', $sclads)->count();
        $ice_summ = Basket::where('status', 350)->whereIn('sclad_id', $sclads);
        $new_orders_summ = Basket::where('status', 100)->whereIn('sclad_id', $sclads);
        $comleting_summ = Basket::where('status', 200)->whereIn('sclad_id', $sclads);
        $sent_summ = Basket::where('status', 300)->whereIn('sclad_id', $sclads);
        $comlited_summ = Basket::where('status', 400)->whereIn('sclad_id', $sclads);

        $sclads_data = array();
        $sclads = Sclad::all();
        foreach ($sclads as $sclad) {
            $sclad_data = [
                "sclad" => $sclad,
                "new_orders" => Basket::where('status', 100)->where('sclad_id', $sclad->id),
                "ice_orders" => Basket::where('status', 350)->where('sclad_id', $sclad->id),
                "completing_orders" => Basket::where('status', 200)->where('sclad_id', $sclad->id),
                "sent_orders" => Basket::where('status', 300)->where('sclad_id', $sclad->id),
                "completed_orders" => Basket::where('status', 400)->where('sclad_id', $sclad->id),
                "totalSold" => Basket_products::getTotlaSumSale([$sclad->id]) ?? 0,
            ];
            array_push($sclads_data, $sclad_data);
        }

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
            'sclads_data' => $sclads_data,
        ]);
    }
}
