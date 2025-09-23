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

    <!-- nav -->

    <!-- END nav -->


    <!-- bawah nav -->
    <div class="hero hero-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mx-auto text-center">
                    <div class="intro-wrap">
                        <h1 class="mb-0">Madasari Beach</h1>
                        <p class="text-white">Nikmati keindahan pantai dengan hamparan pasir luas, ombak tenang, serta
                            suasana yang masih alami, cocok untuk berlibur bersama keluarga atau sekadar melepas penat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end bawah nav -->

    <div class="untree_co-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="owl-single dots-absolute owl-carousel">
                        <img src="{{ asset('assets/images/pantai/pantai-madasari.jpg') }}" alt="Green Canyon"
                            class="img-fluid equal-image">

                    </div>
                </div>
                <div class="col-lg-5 pl-lg-5 ml-auto">
                    <h2 class="section-title mb-4">Tentang Pantai Madasari</h2>
                    <p>Pantai Madasari adalah destinasi wisata yang menawarkan keindahan alam yang masih asli dan suasana
                        yang tenang di wilayah Pangandaran. Pantai ini terkenal dengan gugusan pulau-pulau karang kecil yang
                        indah, terutama saat air laut surut.</p>
                    <ul class="list-unstyled two-col clearfix">
                        <li>Camping</li>
                        <li>Fotografi</li>
                        <li>Memancing</li>
                        <li>Menjelajahi Pulau Karang</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- section about -->


    <!-- END section about -->

    <!-- section team -->

    <!-- END section team -->




    @include('layouts.frontend.blue')
@endsection
