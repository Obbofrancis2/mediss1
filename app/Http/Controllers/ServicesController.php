<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //
    public function add(){
        return view('addservice');
    }
    public function store(Request $request){
        dd($request);
    }
}
