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
                        <h1 class="mb-0">Pantai Batu Karas</h1>
                        <p class="text-white">Rasakan suasana pantai yang tenang dengan pasir hitam lembut dan ombak yang
                            cocok untuk berselancar, berenang, atau sekadar bersantai menikmati keindahan matahari terbenam.
                        </p>
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
                        <img src="{{ asset('assets/images/pantai/batu-karas-2.jpg') }}" alt="Green Canyon"
                            class="img-fluid equal-image">

                    </div>
                </div>
                <div class="col-lg-5 pl-lg-5 ml-auto">
                    <h2 class="section-title mb-4">About Tours</h2>
                    <p>Pantai Batu Karas adalah destinasi wisata populer yang terletak di Desa Batu Karas, Kecamatan
                        Cijulang, Kabupaten Pangandaran, Jawa Barat. Dikenal sebagai surga bagi peselancar pemula, pantai
                        ini menawarkan kombinasi antara ombak yang ideal, pemandangan alam yang memukau, dan suasana yang
                        tenang. Lokasinya juga berdekatan dengan objek wisata Green Canyon.</p>
                    <ul class="list-unstyled two-col clearfix">
                        <li>Surfing</li>
                        <li>banana boat</li>
                        <li>jet ski</li>
                        <li>snorkeling</li>
                        <li>Menyusuri hutan</li>
                        <li>Mencicipi kuliner</li>
                        <li>Bersepeda</li>

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
