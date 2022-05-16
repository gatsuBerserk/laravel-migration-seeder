<?php

namespace App\Http\Controllers;

use App\Train;

use Illuminate\Http\Request;

class TrainControllorer extends Controller
{
    public function index(){
        $trains = Train::paginate(9);    
        return view ("trains.index", compact("trains"));
    }
}
