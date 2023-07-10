<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Appointmentcontroller extends Controller
{
    //
    public function pending(){
        return view('pending');

    }
}
