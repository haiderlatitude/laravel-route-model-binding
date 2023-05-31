<?php

namespace App\Http\Controllers;

use App\Models\RouteModelBinding as RMB;

class RouteModelBinding extends Controller
{
    function index(){
        return view('home', [
            'data' => RMB::all(),
        ]);
    }

    function singleRecord(RMB $key){
        return $key;
    }
}
