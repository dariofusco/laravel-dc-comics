<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>Comics</title>
</head>

<body>

    @include('header')
    <main>
        <div class="hero"></div>
        @yield('main')
    </main>


    @include('footer')

</body>

</html>
