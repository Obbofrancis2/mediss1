<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendingController extends Controller
{
    //
    public function pending(){
        return view('pending');
    }
}
