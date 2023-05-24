@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="container d-flex flex-wrap-wrap">


            {{-- card --}}

            @foreach ($db as $comic)
                <div class="card ms_card">
                    <img class="card-img-top" src="{{ $comic['thumb'] }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic['price'] }}</h5>
                        <p class="card-text">{{ $comic['series'] }}</p>
                        <p class="card-text">{{ $comic['type'] }}</p>
                    </div>
                </div>

        

    @endforeach

    </div>
    </div>
@endsection
