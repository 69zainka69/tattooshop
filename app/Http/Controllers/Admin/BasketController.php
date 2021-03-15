<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Basket;
use Illuminate\Support\Facades\Auth;


class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sclads = Auth::user()->mapSclads();
        $baskets = Basket::whereIn('sclad_id', $sclads)->where('status', 100)->get();
        $comletings = Basket::whereIn('sclad_id', $sclads)->where('status', 200)->get();
        $sents = Basket::whereIn('sclad_id', $sclads)->where('status', 300)->get();
        $comliteds = Basket::whereIn('sclad_id', $sclads)->where('status', 400)->get();
        $ice = Basket::whereIn('sclad_id', $sclads)->where('status', 350)->get();
           
        return view('admin.basket.index', [
            "baskets" => $baskets,
            "comletings" => $comletings,
            "sents" => $sents,
            "comliteds" => $comliteds,
            "ice" => $ice,
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $basket = Basket::find($id);
        return view('admin.basket.show', [
            "basket" => $basket
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
        //
    }
}
