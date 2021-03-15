<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sclad;
use App\Sclad_products;
use App\Prices;
use App\Product;
use App\Amounts;
use Illuminate\Support\Facades\Auth;

class ScladController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sclads = Auth::user()->sclads;
        return view('admin.sclad.all_sclad',[
            'sclads' => $sclads
        ]);
    }

    public function moneyChart(Request $request, $id) 
    {
        $product = Product::find($id);
        $currency = $request->currency ?? 'UAH';
        $prices = Prices::getMoneyAnalytics($currency, $id);
        return view('admin.sclad.components.money_chart', [
            "prices" => $prices,
            "product" => $product,
            "currency" => $currency,
        ]);
    }

    public function amountChart(Request $request, $id) 
    {
        $product = Product::find($id);
        $amounts = Amounts::getLogForProduct($id);
        return view('admin.sclad.components.amount_chart', [
            "amounts" => $amounts,
            "product" => $product,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sclad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_sclad = new Sclad(array(
            'title' => $request->title,
            'supplier' =>$request->supplier,
        ));
        $new_sclad->save();
        return redirect()->back()->withSuccess('Склад добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sclad = Sclad::find($id);
        return view('admin.sclad.show', [
            'sclad' => $sclad,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sclads = Product::orderBy('id')->get();
    }
}
