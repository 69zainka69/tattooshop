<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
class BlogsUploadController extends Controller
{
    public function imageUpload(Request $request)
    {

        $akcii = Blog::find($request->id);

        return view('admin.blogs.addphoto',[
            'akcii' => $akcii,
        ]);
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUploadPost(Request $request)
    {
       
    $id = $request['id'];
    $imageName = time().'.'.$request->image->extension();  
    $request->image->move(public_path('images'), $imageName);
       $new_photo = "/images/".$imageName;
       $new_image = Blog::find($id);
        $new_image->img =  $new_photo;
         $new_image->save();
 
         return redirect()->back()->withSuccess('Фото акции успешно добавлено');

    }
}
