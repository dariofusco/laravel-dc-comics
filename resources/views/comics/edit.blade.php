@extends('layout')

@section('main')
    <div class="container">
        <div class="row">
            <h1 class="text-center py-4 blue">Edit Comic</h1>
            <div class="col py-4">
                <form class="text-white" action="{{ route('comics.update', ['comic' => $comics->id]) }}" method="POST">
                    
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label"><strong class="blue">Title</strong></label>
                        <input type="text" class="form-control" name="title" value="{{ $comics->title}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong class="blue">Description</strong></label>
                        <textarea class="form-control" name="description">{{ $comics->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong class="blue">Thumb</strong></label>
                        <input type="text" class="form-control" name="thumb" value="{{ $comics->thumb}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong class="blue">Price</strong></label>
                        <input type="text" class="form-control" name="price" value="{{ $comics->price}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong class="blue">Series</strong></label>
                        <input type="text" class="form-control" name="series" value="{{ $comics->series}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong class="blue">Sale Date</strong></label>
                        <input type="date" class="form-control" name="sale_date" value="{{ $comics->sale_date}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong class="blue">Type</strong></label>
                        <input type="text" class="form-control" name="type" value="{{ $comics->type}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong class="blue">Artists</strong></label>
                        <input type="text" class="form-control" name="artists" value="{{ $comics->artists}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong class="blue">Writers</strong></label>
                        <input type="text" class="form-control" name="writers" value="{{ $comics->writers}}">
                    </div>
                    <a href={{ route("comics.index") }} class="btn btn-outline-primary">Back</a>
                    <button type="submit" class="btn btn-primary mx-3">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
