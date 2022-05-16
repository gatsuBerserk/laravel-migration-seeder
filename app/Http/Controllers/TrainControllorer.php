<?php

namespace App\Http\Controllers;

use App\Train;

use Illuminate\Http\Request;

class TrainControllorer extends Controller
{
    public function index(){
        $trains = Train::orderBy("departure_date", "asc")->paginate(9);    
        return view ("trains.index", compact("trains"));
    }
    
      
    /**
     * show
     *
     * @param  mixed $id
     * @return void
     */
    public function show($id){
        $train = Train::findOrFail($id);
        return view("trains.show", compact("train"));
    }
}
