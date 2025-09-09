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
                        <h1 class="mb-0">About Us</h1>
                        <p class="text-white">Far far away, behind the word mountains, far from the countries Vokalia
                            and Consonantia, there live the blind texts. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end bawah nav -->


    <!-- section about -->
    <div class="untree_co-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="owl-single dots-absolute owl-carousel">
                        <img src="{{ asset('assets/images/slider-1.jpg') }}" alt="Free HTML Template by Untree.co"
                            class="img-fluid rounded-20">
                        <img src="{{ asset('assets/images/slider-2.jpg') }}" alt="Free HTML Template by Untree.co"
                            class="img-fluid rounded-20">
                        <img src="{{ asset('assets/images/slider-3.jpg') }}" alt="Free HTML Template by Untree.co"
                            class="img-fluid rounded-20">
                        <img src="{{ asset('assets/images/slider-4.jpg') }}" alt="Free HTML Template by Untree.co"
                            class="img-fluid rounded-20">
                        <img src="{{ asset('assets/images/slider-5.jpg') }}" alt="Free HTML Template by Untree.co"
                            class="img-fluid rounded-20">
                    </div>
                </div>
                <div class="col-lg-5 pl-lg-5 ml-auto">
                    <h2 class="section-title mb-4">About Tours</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                        a large language ocean.</p>
                    <ul class="list-unstyled two-col clearfix">
                        <li>Outdoor recreation activities</li>
                        <li>Airlines</li>
                        <li>Car Rentals</li>
                        <li>Cruise Lines</li>
                        <li>Hotels</li>
                        <li>Railways</li>
                        <li>Travel Insurance</li>
                        <li>Package Tours</li>
                        <li>Insurance</li>
                        <li>Guide Books</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END section about -->

    <!-- section team -->
    <div class="untree_co-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-6 text-center">
                    <h2 class="section-title mb-3 text-center">Team</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                        a large language ocean.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 mb-4">
                    <div class="team">
                        <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Image"
                            class="img-fluid mb-4 rounded-20">
                        <div class="px-3">
                            <h3 class="mb-0">James Watson</h3>
                            <p>Co-Founder &amp; CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="team">
                        <img src="{{ asset('assets/images/person_2.jpg') }}" alt="Image"
                            class="img-fluid mb-4 rounded-20">
                        <div class="px-3">
                            <h3 class="mb-0">Carl Anderson</h3>
                            <p>Co-Founder &amp; CEO</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">
                    <div class="team">
                        <img src="{{ asset('assets/images/person_4.jpg') }}" alt="Image"
                            class="img-fluid mb-4 rounded-20">
                        <div class="px-3">
                            <h3 class="mb-0">Michelle Allison</h3>
                            <p>Co-Founder &amp; CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="team">
                        <img src="{{ asset('assets/images/person_3.jpg') }}" alt="Image"
                            class="img-fluid mb-4 rounded-20">
                        <div class="px-3">
                            <h3 class="mb-0">Drew Wood</h3>
                            <p>Co-Founder &amp; CEO</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- END section team -->



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
                                <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the
                                    coast of the Semantics, a large language ocean.&rdquo;</p>
                            </blockquote>
                        </div>

                        <div class="testimonial mx-auto">
                            <figure class="img-wrap">
                                <img src="{{ asset('assets/images/person_3.jpg') }}" alt="Image" class="img-fluid">
                            </figure>
                            <h3 class="name">Lukas Devlin</h3>
                            <blockquote>
                                <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the
                                    coast of the Semantics, a large language ocean.&rdquo;</p>
                            </blockquote>
                        </div>

                        <div class="testimonial mx-auto">
                            <figure class="img-wrap">
                                <img src="{{ asset('assets/images/person_4.jpg') }}" alt="Image" class="img-fluid">
                            </figure>
                            <h3 class="name">Kayla Bryant</h3>
                            <blockquote>
                                <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the
                                    coast of the Semantics, a large language ocean.&rdquo;</p>
                            </blockquote>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END section testi -->

    <!-- section why choose us -->
    <div class="untree_co-section">
        <div class="container">
            <div class="row justify-content-between align-items-center">

                <div class="col-lg-5">
                    <h2 class="section-title text-left mb-4">Why Choose Us</h2>
                    <p>Berpengalaman dan profesional dalam melayani wisatawan, menghadirkan destinasi lengkap mulai dari
                        pantai, alam, hingga kuliner khas Pangandaran, bekerja sama dengan hotel dan transportasi
                        terpercaya, serta menawarkan harga yang terjangkau dan transparan.</p>

                </div>
            </div>
        </div>
    </div>
    <!-- END section why choose us -->


    @include('layouts.frontend.blue')
@endsection
