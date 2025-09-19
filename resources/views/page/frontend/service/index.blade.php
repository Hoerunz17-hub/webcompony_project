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
                        <h1 class="mb-0">Our Services</h1>

                        <p class="text-white">Kami menyediakan paket wisata Pangandaran lengkap mulai dari tur pantai,
                            jelajah alam, hingga wisata kuliner, dengan dukungan transportasi dan akomodasi terpercaya.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end bawah nav -->

    <!-- section image -->
    <div class="untree_co-section">
        <div class="container">
            <div class="row">

                @foreach ($sejarahs as $sejarah)
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="media-1 text-center">
                            <a href="#" class="d-block mb-3">
                                <img src="{{ asset('storage/' . $sejarah->photo) }}" alt="Image"
                                    class="img-fluid rounded">
                            </a>
                            <h3><a href="#">{{ $sejarah->title }}</a></h3>
                            <p>{{ $sejarah->description }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- END section image -->


    <!-- tag -->
    <div class="untree_co-section">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-6 col-lg-3">
                    <div class="service text-center">
                        <span class="icon-paper-plane"></span>
                        <h3>Excellence in Travel</h3>
                        <p>Kami berkomitmen memberikan pengalaman perjalanan terbaik, dari perencanaan hingga petualangan
                            yang tak terlupakan di Pangandaran.</p>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-3">
                    <div class="service text-center">
                        <span class="icon-tag"></span>
                        <h3>Discover Best</h3>
                        <p>ETemukan destinasi indah, pantai eksotis, dan spot wisata terbaik yang hanya kami rekomendasikan
                            khusus untuk Anda.</p>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-3">
                    <div class="service text-center">
                        <span class="icon-user"></span>
                        <h3>A New Moments of Life</h3>
                        <p>Ciptakan momen berkesan di setiap perjalanan Anda — karena setiap liburan adalah cerita yang akan
                            selalu dikenang.</p>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-3">
                    <div class="service text-center">
                        <span class="icon-support"></span>
                        <h3>Joy To Your Journey</h3>
                        <p>Liburan harus menyenangkan dan bebas stres — kami pastikan perjalanan Anda di Pangandaran nyaman,
                            aman, dan penuh keceriaan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END tag -->

    <!-- more service -->
    <div class="untree_co-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2 class="section-title text-center mb-3">More Services</h2>

                    <p>Menyediakan Berbagai Layanan Service Mewah Dimulai Dari Hotel Bintang Lima Serta Makanan Five Star
                    </p>

                </div>
            </div>
            <div class="row align-items-stretch">
                <div class="col-lg-4 order-lg-1">
                    <div class="h-100">
                        <div class="frame h-100">
                            <div class="feature-img-bg h-100"
                                style="background-image: url({{ asset('assets/images/pantai/Villa.jpg') }});"></div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-lg-8  feature-1-wrap d-md-flex flex-md-column order-lg-1 ">


                    <div class="row">
                        @foreach ($services as $service)
                            <div class="col-lg-5 mx-2 feature-1 d-md-flex">
                                <div class="align-self-center">
                                    {{-- <span class="flaticon-house display-4 text-primary"></span> --}}
                                    <img src="{{ asset('storage/' . $service->photo) }}" width="50" alt="">
                                    <h3>{{ $service->title }}</h3>
                                    <p class="mb-0">{{ $service->description }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>




            </div>



        </div>
    </div>
    </div>
    <!-- END more service -->




    @include('layouts.frontend.blue')
@endsection
