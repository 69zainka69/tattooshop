<?php

namespace App\Http\Controllers;
use App\Product;
use App\Prices;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    public function show($category_id,$produt_url){
        $user = Auth::user();
        $item = Product::where('url',$produt_url)->first();
        $category_id = Product::where('category_id',$category_id)->first();
        return view('show',[
            'category_id'=>$category_id,
            'item'=> $item,
            'user'=>$user
        ]);
    }
    public function showCategory(Request $request, $url_cat){
        $user = Auth::user();
        $cat = Category::where('url_cat', $url_cat)->first();
        $paginate = 6;
        $tovars = Product::where('category_id', $cat->id)->paginate($paginate);

        if(isset($request->orderBy)){
            if ($request->orderBy == 'price'){
                $tovars = Product::where('category_id', $cat->id)->OrderBy('price')->paginate($paginate);
            }
            if ($request->orderBy == 'name'){
                $tovars = Product::where('category_id', $cat->id)->OrderBy('title')->paginate($paginate);
            }
        }

        if($request->ajax()){
            return view('ajax.order-by',[
                'tovars' => $tovars,
                'user'=>$user
            ])->render();
        }

        $products = Product::orderBy('created_at')->take(999)->get();
        return view('categorys',[
            'cat' =>$cat,
            'products' =>$products,
            'tovars' =>$tovars,
            'user'=>$user
        ]);
}
}
