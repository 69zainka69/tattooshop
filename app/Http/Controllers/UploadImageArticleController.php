<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;

class UploadImageArticleController extends Controller
{
    public function imageUpload()
    {
        return view('imageUpload');
    }

    public function imageUploadPost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);

       $new_product_image = "/images/".$imageName;
       $new_image = Blog::find($request->$id);
       $new_image = new Blog(array(

        'img' => $new_product_image,
        

     ));
         $new_image->save();
 
         return redirect()->back()->withSuccess('Фото товара успешно добавлена');


   
    }
}