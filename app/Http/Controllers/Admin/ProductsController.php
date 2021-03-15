<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\ProductImage;
use App\Category;
use App\Sclad;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();

        return view('admin.product.index',[
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sclads = Sclad::all();
        $categories = Category::all();
        return view('admin.product.create', [
            "categories" => $categories,
            "sclads" => $sclads,
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

        $new_product = new Product(array(
   
            
            'title' => $request->title,
            'description' => $request->description,
            'url' => $request->url,
            'size' => $request->size,
            'weight' => $request->weight,
            'shelf_life' => $request->shelf_life,
            'metadesc' =>  $request->metadesc,
            'category_id' => $request->category_id,
            'sclad_id' => $request->sclad_id,
            

         ));

        $new_product->save();
        $new_product = $new_product->fresh();

      

        return redirect()->back()->withSuccess('Товар успешно добавлен');
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
    public function edit(Product $product)
    {
        $categories = Category::get();
        $sclads = Sclad::get();
        return view('admin.product.edit',[
            'product' =>$product,
            "categories" => $categories,
            "sclads" => $sclads,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->title = $request->title;
        $product->description = $request->description;
        $product->url = $request->url;
        $product->shelf_life = $request->shelf_life;
        $product->metadesc =  $request->metadesc;
        $product->category_id = $request->category_id;
        $product->size = $request->size;
        $product->weight = $request->weight;


        $product->save();
        
        return redirect()->back()->withSuccess('Товар успешно обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->withSuccess('Товар успешно удален');
    }
}
