@extends('layouts.app')
@section('page-title', 'Comics')

@section('content')
<main>

    <div class="container_list">
        <span class="current">Current Series</span>
        <div class="current_series pt-5 pb-4">
            <div class="container">
                <div class="row row-cols-6 g-3">
                    @foreach($comics as $comic)
                    <div class="col">
                        <div class="card border-0 rounded-0 text-uppercase">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}" class="my-2">
                            {{ $comic['series'] }}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <div class="show-case">
        <div class="container">
            <div class="item">
                <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="">
                <span>Digital Comics</span>
            </div>
            <!-- /.item -->
            <div class="item">
                <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png')}}" alt="">
                <span>DC Merchandise</span>
            </div>
            <!-- /.item -->
            <div class="item">
                <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png')}}" alt="">
                <span>Subscriptions </span>
            </div>
            <!-- /.item -->
            <div class="item">
                <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png')}}" alt="">
                <span>Comic Shop Locator</span>
            </div>
            <!-- /.item -->
            <div class="item">
                <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg')}}" alt="">
                <span>Dc poer visa</span>
            </div>
            <!-- /.item -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.show-case -->
</main>
@endsection