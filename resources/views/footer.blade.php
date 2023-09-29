@php
            $footerLinksComics = [
                ['name' => "Characters"] ,
                ['name' => "Comics"] ,
                ['name' => "Movies"] ,
                ['name' => "TV"] ,
                ['name' => "Games"] ,
                ['name' => "Videos"] ,
                ['name' => "News"] ,
];
            $footerLinksShop = [
                 ['name' => "Shop DC"],
                 ['name' => "Shop DC Collectibles"],
];
            $footerLinksDc = [
                 ['name' => "Therms Of Use"],
                 ['name' => "Privacy policy (New)"],
                 ['name' => "Ad Choises"],
                 ['name' => "Advertising"],
                 ['name' => "Jobs"],
                 ['name' => "Subscriptions"],
                 ['name' => "Talent Workshops"],
                 ['name' => "CPSC Certificates"],
                 ['name' => "Ratings"],
                 ['name' => "Shop Help"],
                 ['name' => "Contact Us"],
];
            $footerLinksSites = [
                ['name' => "DC"],
                ['name' => "MAD Magazine"],
                ['name' => "DC Kids"],
                ['name' => "DC Universe"],
                ['name' => "DC Power Visa"],
];
@endphp
<footer>
    <div class="container d-flex">
        <div class="py-3">
            <h4>DC COMICS</h4>
            <ul class="list-unstyled">
                @foreach ($footerLinksComics as $link)
                    <li><a href="#">{{ $link['name'] }}</a></li>
                @endforeach
                
            </ul>
            <h4>SHOP</h4>
            <ul class="list-unstyled">
                @foreach ($footerLinksShop as $link)
                    <li><a href="#">{{ $link['name'] }}</a></li>
                @endforeach
                
            </ul>
        </div>

        <div class="py-3 px-5">
            <h4>DC</h4>
            <ul class="list-unstyled">
                @foreach ($footerLinksDc as $link)
                    <li><a href="#">{{ $link['name'] }}</a></li>
                @endforeach
                
            </ul>
        </div>

        <div class="py-3">
            <h4>SITES</h4>
            <ul class="list-unstyled">
                @foreach ($footerLinksSites as $link)
                    <li><a href="#">{{ $link['name'] }}</a></li>
                @endforeach
                
            </ul>
        </div>

    </div>
</footer>
<div class="grey-background">
    <div class="container d-flex justify-content-between align-items-center py-4">
        <button type="button" class="btn btn-outline-primary">SIGN-UP NOW!</button>
        <div>
            <span class="px-4 blue">FOLLOW US</span>
            <img class="px-1" src="/images/footer-facebook.png" alt="">
            <img class="px-1" src="/images/footer-twitter.png" alt="">
            <img class="px-1" src="/images/footer-youtube.png" alt="">
            <img class="px-1" src="/images/footer-pinterest.png" alt="">
            <img class="px-1" src="/images/footer-periscope.png" alt="">
        </div>
    </div>
</div>
</footer>