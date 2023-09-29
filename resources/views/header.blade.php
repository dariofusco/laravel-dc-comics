@php
    $navLinks = [
        ['name' => 'CHARACTERS'],
        ['name' => 'COMICS'],
        ['name' => 'MOVIES'],
        ['name' => 'TV'],
        ['name' => 'GAMES'],
        ['name' => 'COLLECTIBLES'],
        ['name' => 'VIDEOS'],
        ['name' => 'FANS'],
        ['name' => 'NEWS'],
        ['name' => 'SHOP'],
    ];
@endphp

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