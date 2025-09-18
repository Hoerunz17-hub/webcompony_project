@extends('layouts.frontend.app')
@section('content')
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <div class="hero hero-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mx-auto text-center">
                    <div class="intro-wrap">
                        <h1 class="mb-0">Our Gallery</h1>
                        <p class="text-white">Jelajahi momen indah dan destinasi menarik Pangandaran melalui koleksi foto
                            perjalanan kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="untree_co-section">
        <div class="container">
            <div class="row justify-content-center g-5">
                {{-- Item 1 --}}
                <div class="col-12 col-md-6 col-lg-5 text-center">
                    <a href="#" class="d-block mb-3">
                        <img src="{{ asset('assets/images/hero-slider-1.jpg') }}" class="img-fluid rounded-lg"
                            alt="Pantai Madasari" style="object-fit: cover; height: 450px; width: 100%;">
                    </a>
                    <h5 class="fw-bold">Pantai Madasari</h5>
                </div>

                {{-- Item 2 --}}
                <div class="col-12 col-md-6 col-lg-5 text-center">
                    <a href="#" class="d-block mb-3">
                        <img src="{{ asset('assets/images/hero-slider-2.jpg') }}" class="img-fluid rounded-lg"
                            alt="Pasir Putih" style="object-fit: cover; height: 450px; width: 100%;">
                    </a>
                    <h5 class="fw-bold">Pasir Putih</h5>
                </div>
            </div>

            <div class="row justify-content-center g-5 mt-4">
                {{-- Item 3 --}}
                <div class="col-12 col-md-6 col-lg-5 text-center">
                    <a href="#" class="d-block mb-3">
                        <img src="{{ asset('assets/images/hero-slider-3.jpg') }}" class="img-fluid rounded-lg"
                            alt="The Arnawa" style="object-fit: cover; height: 450px; width: 100%;">
                    </a>
                    <h5 class="fw-bold">The Arnawa</h5>
                </div>

                {{-- Item 4 --}}
                <div class="col-12 col-md-6 col-lg-5 text-center">
                    <a href="#" class="d-block mb-3">
                        <img src="{{ asset('assets/images/hero-slider-4.jpg') }}" class="img-fluid rounded-lg"
                            alt="Green Canyon" style="object-fit: cover; height: 450px; width: 100%;">
                    </a>
                    <h5 class="fw-bold">Green Canyon</h5>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.frontend.blue')
@endsection
