<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        {{-- HEADER --}}
        <div class="max-container">
            <div class="nav-bar">
                <img class="size-img"  src="{{ Vite::asset('../resources/img/dc-logo.png') }}" alt="">
                <ul class="color-text">
                    <li>CHARACTERS</li>
                    <li>COMICS</li>
                    <li>MOVIES</li>
                    <li>TV</li>
                    <li>GAMES</li>
                    <li>COLLECTIBLES</li>
                    <li>VIDEOS</li>
                    <li>FANS</li>
                    <li>FANS</li>
                    <li>NEWS</li>
                    <li>SHOP</li>
            </ul>
            
            </div>  
        </div>
        {{-- MAIN --}}
        <div class="container-jumbo">
            <img class="img-jumbo" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
        </div>
        <div class="black">
                    {{-- Card --}}
        <div class="card">
            <div class="container-image"></div>
            <div class="text-container">
        </div>
            
        </div>
        </div>
        <div class="color-cont">
            <div class="max-container">
                <div class="mini-main">
                    <div class="container">
                        <img class="img-main" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                        <h5>DIGITAL COMICS</h5>
                    </div>
                    <div class="container">
                        <img class="img-main" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                        <h5>DC MERCHANDISE</h5>
                    </div>
                    <div class="container">
                        <img class="img-main" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                        <h5>SUBSCRIPTION</h5>
                    </div>
                    <div class="container">
                         <img class="img-main" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt=""> 
                        <h5>COMIC SHOP LOCATOR</h5>
                    </div>
                    <div class="container">
                         <img class="img-main" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt=""> 
                        <h5>DC POWER VISA</h5>
                    </div>
                </div>
            </div>
        </div>

        
       
    </body>
</html>







 













































{{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}