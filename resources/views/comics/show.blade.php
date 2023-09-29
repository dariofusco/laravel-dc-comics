@extends('layout')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col py-5">
                <h1 class="text-white">{{ $comics['title'] }}</h1>
                <div class="card text-white">
                    <img class="card-img-top" src="{{ $comics['thumb'] }}" alt="">
                    <div class="card-body">
                        <p class="card-text">{{ $comics['series'] }}</p>
                        <span>${{ $comics['price'] }}</span>
                    </div>
                </div>
                <p class="text-white">{{ $comics['description'] }}</p>
            </div>
        </div>
    </div>
@endsection
