@php
    $navLinks = [['name' => 'CHARACTERS'], ['name' => 'COMICS'], ['name' => 'MOVIES'], ['name' => 'TV'], ['name' => 'GAMES'], ['name' => 'COLLECTIBLES'], ['name' => 'VIDEOS'], ['name' => 'FANS'], ['name' => 'NEWS'], ['name' => 'SHOP']];
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>

    <header>
        <div class="container d-flex justify-content-between align-items-center py-2">
            <img src="/images/dc-logo.png" alt="">
            <ul class="nav nav-pills d-flex list-unstyled">
                @foreach ($navLinks as $navLink)
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            {{ $navLink['name'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </header>

    <main>
        <div class="hero"></div>
        <div class="container text-center py-5">
            <span class="badge badge-primary">CURRENT SERIES</span>
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="{{ $comic['thumb'] }}" alt="">
                            <div class="card-body">
                                <p class="card-text">{{ $comic['series'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button type="button" class="btn btn-primary">LOAD MORE</button>
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
    </main>

</body>

</html>
