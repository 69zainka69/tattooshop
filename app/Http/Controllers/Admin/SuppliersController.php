<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Supplier;
use App\Sclad;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::orderBy('id', 'desc')->get();

        return view('admin.supplier.index',[
            'suppliers' => $suppliers
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
        return view('admin.supplier.create', [
            'sclads' => $sclads,
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
        $new_supplier = new Supplier(array(
   
            'title' => $request->title,
            'name' => $request->name,
            'sclad_id' => $request->sclad_id,
            'info' => $request->info,
            'phone' => $request->phone,
            'adress' => $request->adress,
            'rdpo' => $request->rdpo,
            'doc' => $request->doc,
            
         ));

         $new_supplier->save();
         $new_supplier = $new_supplier->fresh();

         return redirect()->back()->withSuccess('Поставщик добавлен');
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
        $sclads = Sclad::all();

        $suppliers = Supplier::find($id);
        return view('admin.supplier.edit',[
            'suppliers' => $suppliers,
            'sclads' => $sclads,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $suppliers)
    {

        $suppliers->title = $request->title;
        $suppliers->name = $request->name;
        $suppliers->sclad_id = $request->sclad_id;
        $suppliers->info = $request->info;
        $suppliers->phone = $request->phone;
        $suppliers->adress = $request->adress;
        $suppliers->rdpo = $request->rdpo;
        $suppliers->doc = $request->doc;

        $suppliers->save();
        
        return redirect()->back()->withSuccess('Поставщик успешно обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Supplier::find($id);
        $item->delete();
        return redirect()->back()->withSuccess('Поставщик успешно удален');
    }
}
