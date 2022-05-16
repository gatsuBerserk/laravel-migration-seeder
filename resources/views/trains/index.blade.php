{{-- lista dei treni --}}

@extends('layouts.main')

@section('title', "Laravel seed")

@section('content')
      
        <div class="container fluid">
            <div class="row">
                @foreach ($trains as $train)
                <div class="col-4">
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
                               <a href="{{route("ticket", $train->id)}}"> Codice Treno: {{$train->train_code}} </a>
                            </h6>
                            
                        </div>
                      </div>
                </div>
                
                @endforeach 
                <div class="col-12 d-flex justify-content-center">
                    {{$trains->links()}}
                </div>
            </div>
        </div>
@endsection