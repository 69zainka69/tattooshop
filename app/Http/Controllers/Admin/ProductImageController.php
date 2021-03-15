<?php

namespace App\Http\Controllers\Admin;
use App\ProductImage;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use Image;


class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = ProductImage::orderBy('img', 'desc')->get();

        return view('admin.gallery.index',[
            'images' => $images
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::find(1);
        return view('admin.gallery.create', [
            "product" => $product,
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
        $file = Input::file('img');
        $img = Image::make($file);
        Response::make($img->encode('jpeg'));

        $var = new ProductImage;
        $var->img = $img;
        $var->save();


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
    public function update(Request $request, ProductImage $productImage)
    {
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $name = time().'.'.$image->extension();
                $image->move(public_path().'/img/', $name);
                $productImage = new ProductImage(array(
                    'product_id' => $new_product['id'],
                    'url' => '/img/'.$name
                ));
                $productImage->save();
            }
        }
        $product->price_usd = $request->price_usd;
       return redirect()->back()->withSuccess('Товар успешно добавлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ProductImage::find($id);
        $item->delete();
        return redirect()->back()->withSuccess('Фото успешно удалено');
    }
}
