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
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $comics->title}}">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong class="blue">Description</strong></label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description">{{ $comics->description}}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong class="blue">Thumb</strong></label>
                        <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" value="{{ $comics->thumb}}">
                        @error('thumb')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong class="blue">Price</strong></label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $comics->price}}">
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong class="blue">Series</strong></label>
                        <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" value="{{ $comics->series}}">
                        @error('series')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong class="blue">Sale Date</strong></label>
                        <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" value="{{ $comics->sale_date}}">
                        @error('sale_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong class="blue">Type</strong></label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ $comics->type}}">
                        @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong class="blue">Artists</strong></label>
                        <input type="text" class="form-control @error('artists') is-invalid @enderror" name="artists" value="{{ $comics->artists}}">
                        @error('artists')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong class="blue">Writers</strong></label>
                        <input type="text" class="form-control @error('writers') is-invalid @enderror" name="writers" value="{{ $comics->writers}}">
                        @error('writers')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <a href={{ route('comics.show', $comics->id) }} class="btn btn-outline-primary">Back</a>
                    <button type="submit" class="btn btn-primary mx-3">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
