<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Akcii;
class AkciiUploadontroller extends Controller
{
    public function imageUpload()
    {
        return view('admin.akcii.addphoto');
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

       $new_photo = "/images/".$imageName;

       $new_image = Akcii(array(

        'img' => $new_photo,
     

     ));
         $new_image->save();
 
         return redirect()->back()->withSuccess('Фото акции успешно добавлено');


   
    }
}
