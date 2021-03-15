<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategorieController extends Controller
{
    public function index() {
        $parentCategories = Category::where('parent_id', 0)->get();
                 return view('layouts.main', ['categories'=>$parentCategories]);
    }}