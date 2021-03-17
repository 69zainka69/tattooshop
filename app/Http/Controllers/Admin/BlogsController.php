<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Blog::all();
        return view('admin.blogs.show', [
            "articles" => $articles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = Blog::all();
        return view('admin.blogs.create', [
            "articles" => $articles,
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
        $new_article = new Blog(array(
   
            
            'title' => $request->title,
            'description' => $request->description,
            'url' => $request->url,
            'content' => $request->content,
            
            

         ));

        $new_article->save();
        $new_article = $new_article->fresh();

      

        return redirect()->back()->withSuccess('Статья успешно опубликованна');
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
    public function edit(Blog $article)
    {
       
        return view('admin.blogs.edit', [
            "article" => $article,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $article)
    {
        $article->title = $request->title;
        $article->description = $request->description;
        $article->url = $request->url;
        $article->content = $request->content;
        
        $article->save();
        
        return redirect()->back()->withSuccess('Товар успешно обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Blog::find($id);
        $item->delete();
        return redirect()->back()->withSuccess('Слайд успешно удален');
    }
}
