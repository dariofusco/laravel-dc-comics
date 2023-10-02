@extends('layout')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col">
                <form class="text-white" action="{{ route('comics.create') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" id="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Thumb</label>
                        <input type="text" class="form-control" id="thumb">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="text" class="form-control" id="price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Series</label>
                        <input type="text" class="form-control" id="series">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sale Date</label>
                        <input type="date" class="form-control" id="sale-date">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Type</label>
                        <input type="text" class="form-control" id="type">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Artists</label>
                        <input type="text" class="form-control" id="artists">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Writers</label>
                        <input type="text" class="form-control" id="writers">
                    </div>
                    <button type="submit" class="btn btn-primary">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
