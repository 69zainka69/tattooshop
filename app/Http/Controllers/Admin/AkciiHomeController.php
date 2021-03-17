<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Akcii;
class AkciiHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akcii = Akcii::orderBy('id', 'desc')->get();

        return view('admin.akcii.index',[
            'akcii' => $akcii
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.akcii.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_akcii = new Akcii(array(
   
            
            'title' => $request->title,
            'description' => $request->description,
            'url' => $request->url,
            'content' => $request->content,
            
            

         ));

        $new_akcii->save();
        $new_akcii = $new_akcii->fresh();

      

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
    public function edit($id)
    {
        $akcii = Akcii::find($id);

        return view('admin.akcii.edit',[
            'akcii' => $akcii,
        ]);
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
        $akcii = Akcii::where(['id' => $id])->first();
        $akcii->title = $request->title;
        $akcii->description = $request->description;
        $akcii->content = $request->content;
        $akcii->url = $request->url;
        $akcii->save();
        
        return redirect()->back()->withSuccess('Слайд успешно обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Akcii::find($id);
        $item->delete();
        return redirect()->back()->withSuccess('Слайд успешно удален');
    }
}
