@extends('layout')

@section('main')
    <div class="container">
        <div class="row">
            <h1 class="text-white text-center py-3"><strong class="blue">Title:</strong> {{ $comics->title }}</h1>
            <div class="col py-5">
                <div class="card text-white">
                    <img class="card-img-top-big" src="{{ $comics->thumb }}" alt="">
                    <div class="card-body">
                        <h5 class="card-text"><strong class="blue">Series:</strong> {{ $comics->series }}</h5>
                        <p><strong class="blue">Sale Date:</strong> {{ $comics->sale_date }}</p>
                        <p><strong class="blue">Price:</strong> ${{ $comics->price }}</p>
                    </div>
                </div>
            </div>
            <div class="col py-5">
                <h4 class="text-white"><strong class="blue">Type:</strong> {{ $comics->type }}</h4>
                <h3 class="py-3 blue">Description:</h3>
                <p class="text-white ">{{ $comics->description }}</p>
                <p class="text-white"><strong class="blue">Artists:</strong> {{ $comics->artists }}</p>
                <p class="text-white"><strong class="blue">Writers:</strong> {{ $comics->writers }}</p>
                <a href={{ route("comics.index") }} class="btn btn-outline-primary">Back</a>
                <a href={{ route("comics.edit", ['comic' => $comics->id]) }} class="btn btn-outline-primary">Edit</a>
                <form action="{{ route('comics.destroy', $comics->id) }}" method="POST" class="d-inline-block">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
            </div>
        </div>
    </div>
@endsection
