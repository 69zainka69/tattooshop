<?php

namespace App\Http\Controllers;
use App\Product;
use App\Prices;
use Illuminate\Support\Facades\DB;
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
                $domain = $_SERVER['SERVER_NAME'];
                $currency = $_COOKIE['currency'] ?? 'UAH';
                // $tovars = Product::where('category_id', $cat->id)->OrderBy('price')->paginate($paginate);
                $tovars = Product::select('products.*', \DB::raw('
                        select product_id, price_shop
                        from qwert_prices prc1
                        where prc1.created_at = (
                            select max(created_at) from qwert_prices prc2 
                            where prc1.currency = prc2.currency AND prc1.product_id = prc2.product_id
                        ) AND currency = ? AND domain = ?', [$currency, $domain]))
                    ->leftJoin('prices', 'prices.product_id', '=', 'products.id')
                    ->OrderBy('price_shop')
                    ->paginate($paginate);
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
