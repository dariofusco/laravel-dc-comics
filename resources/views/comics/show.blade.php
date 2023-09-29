@extends('layout')

@section('main')
<div class="container">
    <div class="col">
        <div class="card">
            <img class="card-img-top" src="{{ $comics['thumb'] }}" alt="">
            <div class="card-body">
                <p class="card-text">{{ $comics['series'] }}</p>
            </div>
        </div>
    </div>
</div>
@endsection