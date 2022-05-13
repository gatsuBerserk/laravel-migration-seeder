<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainControllorer extends Controller
{
    public function index(){
        return view ("trains.index");
    }
}
