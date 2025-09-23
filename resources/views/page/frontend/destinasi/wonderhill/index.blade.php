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
                        <h1 class="mb-0">Wonder Hill Jojogan</h1>
                        <p class="text-white">Nikmati panorama perbukitan hijau, spot foto indah, kolam alami, air terjun,
                            dan gardu pandang dengan pemandangan Pangandaran dari ketinggian.</p>
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
                        <img src="{{ asset('assets/images/pantai/wonder-hill-2.jpg') }}" alt="Green Canyon"
                            class="img-fluid equal-image">

                    </div>
                </div>
                <div class="col-lg-5 pl-lg-5 ml-auto">
                    <h2 class="section-title mb-4">Tentang Wonder Hill Jojogan</h2>
                    <p>Wonder Hill Jojogan adalah ekowisata perbukitan di Pangandaran yang menawarkan pemandangan alam yang
                        indah dari ketinggian sekitar 1.000 mdpl. Pengunjung dapat melihat panorama pegunungan, laut
                        Pangandaran, dan bahkan Pulau Nusakambangan</p>
                    <ul class="list-unstyled two-col clearfix">
                        <li>Pemandangan</li>
                        <li>Aktivitas air</li>
                        <li>Air terjun dan gua</li>
                        <li>Jip off-road</li>
                        <li>Berkemah</li>
                        <li>Kesenian lokal</li>
                        <li>FotoGrafi</li>

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
