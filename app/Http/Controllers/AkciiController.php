<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Akcii;
use App\SlidersHome;
class AkciiController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $akcii = Akcii::orderBy('id', 'desc')->get();
        $sliders = SlidersHome::orderBy('id')->get();
        return view('akcii.index', [
            'sliders' => $sliders,
            'akcii' => $akcii,
            'user' => $user,
                                  ]);
    }

    public function show($url)
    {
        $sliders = SlidersHome::orderBy('id')->get();
        $user = Auth::user();
        $akcii = Akcii::where('url', $url)->first();
        return view('akcii.show', [
            'sliders' => $sliders,
            'akcii'=>$akcii,
            'user'=>$user
        ]);
    }
}