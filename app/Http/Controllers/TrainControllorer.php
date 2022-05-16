<?php

namespace App\Http\Controllers;

use App\Train;

use Illuminate\Http\Request;

class TrainControllorer extends Controller
{
    public function index(){
        $trains = Train::all();    
        return view ("trains.index", compact("trains"));
    }
}
