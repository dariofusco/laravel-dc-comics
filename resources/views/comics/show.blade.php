@extends('layout')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col py-5">
                <h1 class="text-white text-center py-3">Title: {{ $comics->title }}</h1>
                <div class="card text-white text-center py-3">
                    <img class="card-img-top-big" src="{{ $comics->thumb }}" alt="">
                    <div class="card-body">
                        <h5 class="card-text">Series: {{ $comics->series }}</h5>
                        <p>Sale Date: {{ $comics->sale_date }}</p>
                        <p>Price: ${{ $comics->price }}</p>
                    </div>
                </div>
                <h4 class="text-white">Type: {{ $comics->type }}</h4>
                <h3 class="text-white py-3">Description:</h3>
                <p class="text-white ">{{ $comics->description }}</p>
                <p class="text-white">Artists: {{ $comics->artists }}</p>
                <p class="text-white">Writers: {{ $comics->writers }}</p>
                <a href={{ route("comics.index", ["id" => $comics->id]) }} class="btn btn-outline-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
