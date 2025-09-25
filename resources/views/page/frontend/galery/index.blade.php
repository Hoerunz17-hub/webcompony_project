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
            <div class="row justify-content-center g-4">
                @foreach ($gallerys as $gallery)
                    <div class="col-12 col-md-6 col-lg-6 text-center">
                        <a href="#" class="d-block mb-3">
                            <img src="{{ asset('storage/' . $gallery->photo) }}" class="img-fluid rounded-lg fixed-img"
                                alt="{{ $gallery->title }}">
                        </a>
                        <h5 class="fw-bold">{{ $gallery->title }}</h5>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



    @include('layouts.frontend.blue')
@endsection
