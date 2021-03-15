<?php

namespace App\Http\Controllers;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Prices;
use App\Product;
use App\Sclad;
use App\ProductImage;
use App\Basket;
use App\Basket_products;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        //$product = Product::where('id');
        $total = 0;
        $i = '';
        if(isset($_COOKIE['cart_id'])) {
            $cart_id = $_COOKIE['cart_id'];
            $cart = \Cart::session($cart_id);
            $items = $cart->getContent();
            foreach($items as $item) {
                $total += ($item->quantity * $item->price);
                $i = $i.$item->attributes->product->sclad_id;
                
            }
        } else {
            $cart_id = null;
            $cart = null;
            $items = [];
        }
        $numbers_sclad = count_chars($i, 3);
        $count_sclads = mb_strlen($numbers_sclad);
       
        return view('cart', [
            'user' => $user,
            'cart_items' => $items,
            'totalSum' => $total,
            'count_sclads' => $count_sclads,
            
        ]);
    }

    public function addToCart(Request $request)
    {
        $product = Product::where('id', $request->id)->first();

        if(!isset($_COOKIE['cart_id'])) {
            $cart_id = uniqid();
            setcookie('cart_id', $cart_id);
        } else {
            $cart_id = $_COOKIE['cart_id'];
        }

        $cart = \Cart::session($cart_id);
        $prices = Prices::getProductPrices($request->id);
     
        $cart->add([
            'id' => $product->id,
            'name' => $product->title,
            'price' => 0,
            'quantity' => (int) $request->qty,
            'attributes' => [
                'img' => isset($product->images[0]->img) ? $product->images[0]->img : 'no_image.png',
                'sclad_id' => $product->sclad_id,
                'product' => $product,
            ]
        ]);

        return response()->json($cart->getContent());
    }
    public function store(Request $request)
    {
        $cart_id = $_COOKIE['cart_id'];
        $cart = \Cart::session($cart_id);
        $items = $cart->getContent();
        $sclads = array();
        foreach($items as $item) {
            $sclad_id = $item->attributes->sclad_id;
            if(!isset($sclads[$sclad_id])) {
                $sclads[$sclad_id] = array();
            }
            array_push($sclads[$sclad_id], $item);
        }
        $created_baskets = array();
        foreach($sclads as $sclad  => $items) {
            $basket = Basket::createWithItems(array(
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'user_id' => Auth::check() ? Auth::id() : null,
                'phone' => $request->phone,
                'email' => $request->email,
                'adress_1' => $request->adress_1,
                'adress_2' => $request->adress_2,
                'sclad_id' => $sclad,
            ), $items);
            array_push($created_baskets, $basket);
        }
        \Cart::session($cart_id)->clear();
        return redirect()->back()->withSuccess('Заявка на покупку отправлена, ожидайте, мы с вами свяжемся для уточнения заказа');
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
    public function edit(Basket $basket)
    {
        
            
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
        $statuss= $request->status;
        $basket = Basket::where(['id' => $id])->first();
        $basket->status = $statuss;
        $basket->ttn = $request->ttn;
        $basket->save();
        return redirect()->back()->withSuccess('Готово');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
