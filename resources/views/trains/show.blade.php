@extends('layouts.main') 

@section('title', "Train single ticket")

@section('content')
<div class="card">
    <div class="card-header d-flex align-items-center">
        <h4>
            Compagnia: {{$train->company}}
        </h4>
    </div>
    <div class="card-body"> 
        <h5>
            Da: {{$train->departure_station}}
        </h5>
        <h5>
            Per: {{$train->arrival_station}}
        </h5>
        <p>Data Partenza: {{$train->departure_date}} </p>
        <p>
            Ora Partenza: {{$train->departure_time}}
        </p> 
        <h6>
           <a href="#"> Codice Treno: {{$train->train_code}} </a>
        </h6>
        
    </div>
  </div>
</div>
@endsection