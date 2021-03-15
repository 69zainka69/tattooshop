<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductImage;
class ImageUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUpload()
    {
        return view('imageUpload');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUploadPost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);

       $new_product_image = "/images/".$imageName;

       $new_image = new ProductImage(array(

        'img' => $new_product_image,
        'product_id' => $request->product_id

     ));
         $new_image->save();
 
         return redirect()->back()->withSuccess('Фото товара успешно добавлена');


   
    }
}