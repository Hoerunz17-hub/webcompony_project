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
                        <h1 class="mb-0">Green Valley</h1>
                        <p class="text-white">Nikmati suasana alam yang asri dengan sungai jernih, pepohonan hijau, dan
                            udara segar, cocok untuk body rafting, berenang, atau sekadar bersantai menikmati panorama
                            alami.</p>
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
                        <img src="{{ asset('assets/images/pantai/sungai-citumang.jpg') }}" alt="Green Canyon"
                            class="img-fluid equal-image">

                    </div>
                </div>
                <div class="col-lg-5 pl-lg-5 ml-auto">
                    <h2 class="section-title mb-4">Tentang green Valley</h2>
                    <p>Sungai Citumang, yang juga dikenal sebagai Green Valley, adalah destinasi wisata alam di Pangandaran
                        yang menawarkan petualangan di sungai dengan air jernih berwarna hijau kebiruan. Lokasinya berada di
                        Desa Bojong, Kecamatan Parigi, Kabupaten Pangandaran, dan tidak terlalu jauh dari Pantai
                        Pangandaran.</p>
                    <ul class="list-unstyled two-col clearfix">
                        <li>Body Rafting</li>
                        <li>Swiming</li>
                        <li>Melompat dari tebing</li>
                        <li>Menyusuri Gua</li>

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
