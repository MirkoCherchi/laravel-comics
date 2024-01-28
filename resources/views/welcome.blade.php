@extends('layouts.app')

@section('main')
    <div class="jumbotron">
    </div>

    <div class="main-top">
        <div class="container">
            <h3>Current series</h3>
            <div class="wrap">
                <ul class="products row">
                    @foreach ($fumetti as $fumetto)
                        <li class="col-2 py-2">
                            <div class="pic-container">
                                <a href="#"><img src="{{ $fumetto['thumb'] }} " alt=""></a>
                            </div>
                            <a class="comic-title" href="#">
                                <h5>{{ $fumetto['series'] }}</h5>
                            </a>
                        </li>
                    @endforeach

                </ul>

            </div>
            <div class="button-main">
                <button>load more</button>
            </div>



        </div>
    </div>
    <div class="cards">
        <div class="container">
            <div class="list-card">

                <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}"
                        alt="">
                    <p>Digital Comics</p>
                </a>
                <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    <p>DC Merchandise</p>
                </a>
                <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    <p>Subscription</p>
                </a>
                <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    <p>Comic Shop Locator</p>
                </a>
                <a href="#"><img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    <p>Dc Power Visa</p>
                </a>

            </div>
        </div>
    </div>

    <ul>
        @foreach ($fumetti as $fumetto)
            <li> {{ $fumetto['title'] }} </li>
        @endforeach
    </ul>
@endsection
