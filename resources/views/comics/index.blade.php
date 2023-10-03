@extends('layout')

@section('main')

        <div class="container text-center py-5">
            <span class="badge badge-primary">CURRENT SERIES</span>
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-2">
                        <div class="card">
                            <a href="{{ route('comics.show', $comic->id) }}"><img class="card-img-top" src="{{ $comic->thumb }}" alt=""></a>
                            <div class="card-body">
                                <p class="card-text">{{ $comic->series }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('comics.create') }}" class="btn btn-primary">Add New Comic</a>
        </div>
        <div class="bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <img src="/images/buy-comics-digital-comics.png" alt="">
                        <span>DIGITAL COMICS</span>
                    </div>
                    <div class="col">
                        <img src="/images/buy-comics-merchandise.png" alt="">
                        <span>DC MERCHANDISE</span>
                    </div>
                    <div class="col">
                        <img src="/images/buy-comics-subscriptions.png" alt="">
                        <span>SUBSCRIPTION</span>
                    </div>
                    <div class="col">
                        <img src="/images/buy-comics-shop-locator.png" alt="">
                        <span>COMIC SHOP LOCATOR</span>
                    </div>
                    <div class="col">
                        <img src="/images/buy-dc-power-visa.svg" alt="">
                        <span>DC POWER VISA</span>
                    </div>
                </div>
            </div>
        </div>

    @endsection
