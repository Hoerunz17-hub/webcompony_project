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
                        <h1 class="mb-0">Green Canyon</h1>
                        <p class="text-white">Rasakan keindahan alam Pangandaran dengan menyusuri sungai jernih, tebing
                            hijau yang megah, serta pesona alam yang memukau di Green Canyon.</p>
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
                        <img src="{{ asset('assets/images/pantai/green-canyon-3.jpg') }}" alt="Green Canyon"
                            class="img-fluid equal-image">

                    </div>
                </div>
                <div class="col-lg-5 pl-lg-5 ml-auto">
                    <h2 class="section-title mb-4">About Tours</h2>
                    <p>Green Canyon adalah salah satu destinasi wisata alam terbaik di Pangandaran, terkenal dengan aliran
                        sungainya yang jernih, tebing hijau yang menjulang, serta suasana alam yang menenangkan. Tempat ini
                        menjadi favorit wisatawan untuk body rafting, berenang, hingga menikmati panorama indah sepanjang
                        sungai.</p>
                    <ul class="list-unstyled two-col clearfix">
                        <li>Body Rafting</li>
                        <li>Perahu Wisata</li>
                        <li>Cliff Jumping</li>
                        <li>Berenang & Snorkeling</li>
                        <li>Hotels</li>
                        <li>Explorasi Gua</li>
                        <li>FotoGrafi</li>
                        <li>Wisata Alam</li>
                        <li>Kuliner Lokal</li>

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
