<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pages_controller extends Controller
{
    public function landing(){
        return view('landing');
    }
}
