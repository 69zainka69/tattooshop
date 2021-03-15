<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PolitikaController extends Controller
{
    public function index(){
        $user = Auth::user();
        
        return view('politika', [
            'user' =>$user,
                                  ]);
    }
}
