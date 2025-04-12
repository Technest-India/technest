@extends('welcome')

@section('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Technest India</title>
@endsection

@section('content')
    <header>
        @include('layouts.navbar')
        @include('layouts.asideNavbar')
    </header>
    <section class="under-nav-section">
        <div class="background-top-section gradient-top-bottom start-gradient end-gradient">
            <div class="container mx-auto px-4 d-flex flex-wrap text-center justify-content-center py-5">
                <div class="describe-section">
                    <h1 class="fs-1 fw-bold mb-2 text-white">Fast, Free way to get experts</h1>
                    <div class="mb-2 text-white fs-3">Discover Top Experts in <span class="fw-bold">Chennai</span>
                    </div>
                    <div class="position-relative">
                        <p class="text-focus fw-bold p-0 m-0 fs-4">Skilled, Trusted, Reliable!</p>
                        <img alt="" width="100" height="6" decoding="async" data-nimg="1"
                            src="https://sulcdn.azureedge.net/content/images/sulekha-home/v1/skIconBrushOrange.svg">
                    </div>
                </div>
                <div class="search-section"></div>
            </div>
        </div>

    </section>
@endsection

@section('script')
    <script src="{{ mix('js/app.js') }}" defer></script>
@endsection
