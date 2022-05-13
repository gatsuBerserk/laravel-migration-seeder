{{-- lista dei treni --}}

@extends('layouts.main')

@section('title', "Laravel seed")

@section('AllTrains')
    <div>
       <h1>
           Treni in partenza oggi:
       </h1>
    </div>
       @foreach ($trains as $train)
       <div class="ticket">
           <div class="company">
               <h4>
                   {{$train->company}}
               </h4>
           </div>
           <div class="travel">
                <p>
                    <pre>Partenza da:</pre>
                    {{$train->departure_station}}
                </p> 
                <p>
                    <pre>Orario Partenza</pre>
                    {{$train->departure_time}}
                </p>
                <p>
                    <pre>Orario Arrivo </pre>
                    {{$train->arrival_time}}
                </p>
                <p>
                    <pre> Per:</pre>
                    {{$train->arrival_station}}
                </p>
           </div>
           <div class="train-code">
                <p>
                    <pre> Codice treno</pre>
                    {{$train->train_code}}
                </p>
            </div>
            <div class="info">
                
            </div>
       </div>
           
       @endforeach
    
@endsection