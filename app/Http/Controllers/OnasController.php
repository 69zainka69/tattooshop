<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class OnasController extends Controller
{

    public function index(){
        $user = Auth::user();
        
       
        return view('onas', [
            'user' =>$user
                                  ]);
    }
}