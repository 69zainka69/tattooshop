<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class KypitController extends Controller
{
    public function index(){
        $user = Auth::user();
        
        return view('kypit', [
            'user' =>$user,
                                  ]);
    }
}
