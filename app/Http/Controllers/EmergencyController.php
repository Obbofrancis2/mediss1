<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmergencyController extends Controller
{
    //
    public function emergency(){
        return view ('emergency');
    }
}
