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
            <div class="row justify-content-center g-5">
                {{-- Item 1 --}}
                <div class="col-12 col-md-6 col-lg-5 text-center">
                    <a href="#" class="d-block mb-3">
                        <img src="assets/images/pantai/logo travoloka.png" class="img-fluid rounded-lg" alt="Traveloka Logo"
                            style="height: auto; max-width: 100%;">
                    </a>
                </div>

                {{-- Item 2 --}}
                <div class="col-12 col-md-6 col-lg-5 text-center">
                    <a href="#" class="d-block mb-3">
                        <img src="assets/images/pantai/logo arwana.png" class="img-fluid rounded-lg"
                            alt="The Arnawa Hotel Logo" style="height: auto; max-width: 100%;">
                    </a>
                </div>
            </div>

            <div class="row justify-content-center g-5 mt-4">
                {{-- Item 3 --}}
                <div class="col-12 col-md-6 col-lg-5 text-center">
                    <a href="#" class="d-block mb-3">
                        <img src="assets/images/pantai/logo pnd.png" class="img-fluid rounded-lg"
                            alt="Dive Center Pangandaran Logo" style="height: auto; max-width: 100%;">
                    </a>
                </div>

                {{-- Item 4 --}}
                <div class="col-12 col-md-6 col-lg-5 text-center">
                    <a href="#" class="d-block mb-3">
                        <img src="assets/images/pantai/wonderful.webp" class="img-fluid rounded-lg"
                            alt="Wonderful Indonesia Logo" style="height: auto; max-width: 100%;">
                    </a>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.frontend.blue')
@endsection
