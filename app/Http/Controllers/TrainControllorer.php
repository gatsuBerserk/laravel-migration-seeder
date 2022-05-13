<?php

namespace App\Http\Controllers;

use App\Train;

use Illuminate\Http\Request;

class TrainControllorer extends Controller
{
    public function index(){
        
        // $trains = Train::all();
    //     $data =[
    //         "train" => new Train(), 
    //         "trains"=> $trains
    // ];
    $trains = Train::where("departure_date", date("y-m-d"))
    ->get();
        return view ("trains.index", compact("trains"));
    }
}
