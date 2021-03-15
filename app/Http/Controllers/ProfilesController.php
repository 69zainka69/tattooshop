<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Illuminate\Support\Facades\Auth;
class ProfilesController extends Controller

    {
        public function show($id)
        {
            $profile = Profile::find($id);
            return view('profiles', compact('profile'));
        }
    }

