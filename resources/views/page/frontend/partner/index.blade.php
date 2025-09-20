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
                        <h1 class="mb-0">Our Partners</h1>
                        <p class="text-white">Didukung oleh mitra terpercaya: Traveloka, The Arnawa Hotel, Wonderful
                            Indonesia, dan Divecenter Pangandaran. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="untree_co-section">
        <div class="container">
            <div class="row justify-content-center g-4">
                @foreach ($partner as $partners)
                    <div class="col-12 col-md-6 col-lg-6 text-center">
                        <a href="#" class="d-block mb-2">
                            <img src="{{ asset('storage/' . $partners->photo) }}" class="partner-logo" alt="Traveloka Logo">
                        </a>
                        <p class="fw-bold">{{ $partners->description }}</p>
                    </div>
                @endforeach




            </div>


        </div>
    </div>

    <style>
        .partner-logo {
            max-width: 250px;
            /* samain semua dengan ukuran traveloka */
            height: 150px;
            /* biar tingginya konsisten */
            object-fit: contain;
            /* logo tidak ketarik */
            margin: 0 auto;
            display: block;
        }
    </style>

    @include('layouts.frontend.blue')
@endsection
