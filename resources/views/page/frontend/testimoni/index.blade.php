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
                        <h1 class="mb-0">Testimonials</h1>
                        <p class="text-white">Don’t just take our word for it — see what our 
                        travelers have to say! Their smiles and stories say it all.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end bawah nav -->






    <!-- section testi -->
    <div class="untree_co-section testimonial-section mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h2 class="section-title text-center mb-5">Testimonials</h2>

                    <div class="owl-single owl-carousel no-nav">
                        <div class="testimonial mx-auto">
                            <figure class="img-wrap">
                                <img src="{{ asset('assets/images/person_2.jpg') }}" alt="Image" class="img-fluid">
                            </figure>
                            <h3 class="name">Adam Aderson</h3>
                            <blockquote>
                                <p>&ldquo;The entire trip was perfectly organized — from transportation to activities. 
                                Everything ran smoothly, and I could just relax and enjoy every moment.&rdquo;</p>
                            </blockquote>
                        </div>

                        <div class="testimonial mx-auto">
                            <figure class="img-wrap">
                                <img src="{{ asset('assets/images/person_3.jpg') }}" alt="Image" class="img-fluid">
                            </figure>
                            <h3 class="name">Lukas Devlin</h3>
                            <blockquote>
                                <p>&ldquo;Such a wonderful experience! The guides were friendly and knowledgeable, 
                                and we discovered hidden gems we would never have found on our own.&rdquo;</p>
                            </blockquote>
                        </div>

                        <div class="testimonial mx-auto">
                            <figure class="img-wrap">
                                <img src="{{ asset('assets/images/person_4.jpg') }}" alt="Image" class="img-fluid">
                            </figure>
                            <h3 class="name">Kayla Bryant</h3>
                            <blockquote>
                                <p>&ldquo;Beautiful destinations, excellent service, and a stress-free trip.
                                Highly recommended for anyone who wants a well-planned vacation.&rdquo;</p>
                            </blockquote>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END section testi -->



    @include('layouts.frontend.blue')
@endsection
