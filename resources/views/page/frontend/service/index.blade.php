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
                        <p class="text-white">Let us take the stress out of planning! We offer curated trips, 
                        expert guidance, and unique experiences so you can focus on enjoying the journey.</p>
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
                <div class="col-6 col-md-6 col-lg-3">
                    <div class="media-1">
                        <a href="#" class="d-block mb-3"><img src="{{ asset('assets/images/pantai/pantai-madasari.jpg') }}"
                                alt="Image" class="img-fluid"></a>
                        <div class="d-flex">
                            <div>
                                <h3><a href="#">Pantai Madasari</a></h3>
                                <p>A serene beach with stunning waves and a peaceful 
                                atmosphere — perfect for relaxing and enjoying the sunset.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-3">
                    <div class="media-1">
                        <a href="#" class="d-block mb-3"><img src="{{ asset('assets/images/pantai/cagar-alam.webp') }}"
                                alt="Image" class="img-fluid"></a>
                        <div class="d-flex">
                            <div>
                                <h3><a href="#">Cagar Alam Pananjung</a></h3>
                                <p>A natural conservation area rich in biodiversity,
                                offering hiking trails and a chance to explore untouched nature.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-3">
                    <div class="media-1">
                        <a href="#" class="d-block mb-3"><img src="{{ asset('assets/images/pantai/pasir-putih.jpg') }}"
                                alt="Image" class="img-fluid"></a>
                        <div class="d-flex">
                            <div>
                                <h3><a href="#">Pantai Pasir Putih</a></h3>
                                <p>Famous for its soft white sand and crystal-clear water,
                                ideal for swimming and family activities.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-3">
                    <div class="media-1">
                        <a href="#" class="d-block mb-3"><img src="{{ asset('assets/images/pantai/green-canyon-about-us.jpg') }}"
                                alt="Image" class="img-fluid"></a>
                        <div class="d-flex">
                            <div>
                                <h3><a href="#">Green Canyon</a></h3>
                                <p>Discover the breathtaking canyon with emerald-green 
                                waters and thrilling boat rides through natural caves.</p>
                            </div>
                        </div>
                    </div>
                </div>
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
                        <p>We are committed to providing the best travel experience,
                        from destination planning to unforgettable adventures.</p>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-3">
                    <div class="service text-center">
                        <span class="icon-tag"></span>
                        <h3>Discover Best</h3>
                        <p>Explore hidden gems, iconic landmarks, and the best l
                        ocal attractions with our curated recommendations.</p>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-3">
                    <div class="service text-center">
                        <span class="icon-user"></span>
                        <h3>A New Moments of Life</h3>
                        <p>Create meaningful memories with every journey you take — because every trip tells a story.</p>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-3">
                    <div class="service text-center">
                        <span class="icon-support"></span>
                        <h3>Joy To Your Journey</h3>
                        <p>Travel should be fun and inspiring — let us make every moment of your trip joyful and stress-free.</p>
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
                    <p>From guided tours to custom itineraries, we offer a range of services to make your journey seamless. 
                    Whether you’re traveling solo, as a couple, or with family, we ensure every detail is taken care of.</p>
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

                <div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1">

                    <div class="feature-1 d-md-flex">
                        <div class="align-self-center">
                            <span class="flaticon-house display-4 text-primary"></span>
                            <h3>Beautiful Villa</h3>
                            <p class="mb-0">Perfect for families, or couples who enjoy luxury and independence while
                                travelling.
                                Enjoy the space and privacy of these fully-furnished, self-standing mansions —
                                travellers can cook, and lounge.</p>
                        </div>
                    </div>

                    <div class="feature-1 ">
                        <div class="align-self-center">
                            <span class="flaticon-restaurant display-4 text-primary"></span>
                            <h3>Restaurants & Cafe</h3>
                            <p class="mb-0">Pangandaran offers a rich variety of dining options, from local traditional
                                warungs
                                to stylish cafes and beachside restaurants, perfect for every taste and occasion.</p>
                        </div>
                    </div>

                </div>

                <div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3">

                    <div class="feature-1 d-md-flex">
                        <div class="align-self-center">
                            <span class="flaticon-mail display-4 text-primary"></span>
                            <h3>Easy to Connect</h3>
                            <p class="mb-0">Pangandaran’s closest train stations are in Banjar (roughly to the north)
                                and Sidareja
                                (to the northeast)— both are on the same railway line and are around two hours by bus
                                from Pangandaran.</p>
                        </div>
                    </div>

                    <div class="feature-1 ">
                        <div class="align-self-center">
                            <span class="flaticon-phone-call display-4 text-primary"></span>
                            <h3>24/7 Support</h3>
                            <p class="mb-0">Supported by 24/7 customer support services and a professional expert team,
                                ensuring maximum uptime and quick response to any issues that may arise.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- END more service -->




    @include('layouts.frontend.blue')
@endsection
