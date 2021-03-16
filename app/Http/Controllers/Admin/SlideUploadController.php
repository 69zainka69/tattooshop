<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SlidersHome;
class SlideUploadController extends Controller
{
    public function imageUpload()
    {
        return view('admin.slider.addslide');
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

       $new_slide = "/images/".$imageName;

       $new_image = new SlidersHome(array(

        'img' => $new_slide,
     

     ));
         $new_image->save();
 
         return redirect()->back()->withSuccess('Слайд успешно добавлен');


   
    }
}
