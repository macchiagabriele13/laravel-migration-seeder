@extends('layouts.app')

@section('content')
<h1>Home Page</h1>

<div class="container">
    <div class="row">
        @forelse($trains as $train)
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{$train['company']}}</h3>
                    <h5 class="card-text">{{$train['start_station']}}</h5>
                    <h5 class="card-text">{{$train['destination_station']}}</h5>
                    <small>{{$train['time_start']}}</small>
                    <small>{{$train['time_arrive']}}</small>
                    <small>{{$train['code_train']}}</small>
                    <small>{{$train['n_carrozze']}}</small>

                    @if($train['in_time'] === 1)
                    <small>In Orario</small>
                    @else
                    <small>In Ritardo</small>
                    @endif

                    @if($train['deleted'] === 0)
                    <small>In arrivo</small>
                    @else
                    <small>Cancellato</small>
                    @endif

                </div>
            </div>
        </div>
        @empty
        <div class="col-4">
            <h1>No Movies Avaiable</h1>
        </div>
        @endforelse


    </div>
</div>



@endsection