<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Prices;
use App\Product;

class PricesController extends Controller
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
        $product_id = $_SERVER['REQUEST_URI'];
        $product_id=(parse_url($product_id, PHP_URL_QUERY));
        $prices = Prices::getProductPrices($product_id);
        $product = Product::find($product_id);
        return view('admin.price.create', [
            "product" => $product,
            "prices" => $prices
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $date = date("Y-m-d H:i:s");
        $new_price = new Prices(array(
   
            'currency' => $request->currency,
            'price_purchase' => $request->price_purchase,
            'price_provided' => $request->price_provided,
            'price_parlor' =>  $request->price_parlor,
            'price_shop' => $request->price_shop,
            'product_id' => $request->product_id,
            'created_at' => $date,
            'domain' => $request->domain,
  ));

        $new_price->save();
        $new_price = $new_price->fresh();

        return redirect()->back()->withSuccess('Готово, цена добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
