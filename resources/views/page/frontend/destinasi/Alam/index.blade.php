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
                        <h1 class="mb-0">Cagar Alam</h1>
                        <p class="text-white">Nikmati keindahan hutan tropis yang masih asri, temui satwa liar seperti rusa,
                            monyet, dan berbagai jenis burung, serta jelajahi goa dan pantai alami yang menjadi bagian dari
                            kawasan konservasi Pangandaran.</p>
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
                        <img src="{{ asset('assets/images/pantai/cagar-alam-2.jpg') }}" alt="Green Canyon"
                            class="img-fluid equal-image">

                    </div>
                </div>
                <div class="col-lg-5 pl-lg-5 ml-auto">
                    <h2 class="section-title mb-4">About Tours</h2>
                    <p>kawasan konservasi alam yang menawarkan kombinasi menarik antara hutan tropis, pantai pasir putih,
                        ekosistem laut, serta situs-situs bersejarah. Bersebelahan dengan Taman Wisata Alam (TWA), tempat
                        ini menjadi destinasi populer bagi wisatawan yang ingin menikmati wisata alam sekaligus edukasi
                        lingkungan.</p>
                    <ul class="list-unstyled two-col clearfix">
                        <li>Menjelajahi gua-gua eksotis:</li>
                        <li>Pengamatan satwa liar</li>
                        <li>Snorkeling dan pemandangan bawah laut</li>
                        <li>Pengamatan flora</li>
                        <li>Mengunjungi situs sejarah</li>
                        <li>Explorasi Gua</li>


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
