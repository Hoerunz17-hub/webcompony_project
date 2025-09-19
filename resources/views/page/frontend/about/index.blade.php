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
                        <p class="text-white">Mengenal lebih dekat siapa kami dan komitmen kami dalam menghadirkan wisata
                            Pangandaran yang berkesan.</p>
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
                        <<<<<<< HEAD <img src="{{ asset('assets/images/pantai/the-arwana.jpg') }}"
                            alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
                            <img src="{{ asset('assets/images/pantai/madasari-.jpg') }}"
                                alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
                            <img src="{{ asset('assets/images/pantai/pnd.png') }}" alt="Free HTML Template by Untree.co"
                                class="img-fluid rounded-20">
                            <img src="{{ asset('assets/images/pantai/Pantai-Pangandaran-ndonesia.jpg') }}"
                                alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
                            <img src="{{ asset('assets/images/pantai/green-canyon-about-us.jpg') }}"
                                alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
                    </div>
                </div>
                <div class="col-lg-5 pl-lg-5 ml-auto">
                    <h2 class="section-title mb-4">About Tours</h2>
                    <p>In the folklore created by the people of Pangandaran,
                        Pangandaran was formed when the Pananjung Village was first
                        opened by the fishermen of the Sundanese tribe.</p>
                    =======
                    @foreach ($abouts as $about)
                        <img src="{{ asset('storage/' . $about->photo) }}" alt="Free HTML Template by Untree.co"
                            class="img-fluid rounded-20">
                    @endforeach

                </div>
            </div>
            <div class="col-lg-5 pl-lg-5 ml-auto">
                @foreach ($abouts as $about)
                    <h2 class="section-title mb-4">About Us</h2>
                    <p>{{ $about->description }}</p>
                @endforeach
                >>>>>>> 9781448deaeacf3be151bb4d5f69dfd5c2c35fdf
                <ul class="list-unstyled two-col clearfix">
                    <li>The Arwana</li>
                    <li>Pantai Madasari</li>
                    <li>Pantai Pangandaran</li>
                    <li>Pantai Pasir Putih</li>
                    <li>Green Canyon</li>
                    <li>Villa</li>
                    <li>Travel Insurance</li>
                    <li>Restaurants & Cafe</li>
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
                    <<<<<<< HEAD <p>We’re a group of travel lovers, storytellers, and adventure seekers who are here to make
                        your
                        trip fun and stress-free. From planning to guiding, we’ve got your back every step of the way.</p>
                        =======
                        <p>Kami adalah tim yang berdedikasi untuk memberikan pelayanan terbaik dalam setiap perjalanan
                            wisata
                            Anda. Dengan pengalaman dan semangat kerja sama, kami siap memastikan liburan di Pangandaran
                            menjadi
                            lebih mudah, nyaman, dan menyenangkan.</p>
                        >>>>>>> 9781448deaeacf3be151bb4d5f69dfd5c2c35fdf
                </div>
            </div>

            <div class="row justify-content-center">
                @foreach ($tenagakerjas as $tenagakerja)
                    <div class="col-lg-3 mb-4">
                        <div class="team">
                            <img src="{{ asset('storage/' . $tenagakerja->photo) }}" alt="Image"
                                class="img-fluid mb-4 rounded-20">
                            <div class="px-3">
                                <h3 class="mb-0">{{ $tenagakerja->name }}</h3>
                                <p>{{ $tenagakerja->position }}</p>
                            </div>
                        </div>
                    </div>
                    <<<<<<< HEAD </div>
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
                        =======
                @endforeach

                >>>>>>> 9781448deaeacf3be151bb4d5f69dfd5c2c35fdf

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
                        <<<<<<< HEAD <div class="testimonial mx-auto">
                            <figure class="img-wrap">
                                <img src="{{ asset('assets/images/person_2.jpg') }}" alt="Image" class="img-fluid">
                            </figure>
                            <h3 class="name">Iwayang</h3>
                            <blockquote>
                                <p>&ldquo;Explorers will be invited to navigate the swift currents of the Cijulang river
                                    over a track length of approximately 2.5 km or with a duration of 2 to 3 hours.&rdquo;
                                </p>
                            </blockquote>
                    </div>

                    <div class="testimonial mx-auto">
                        <figure class="img-wrap">
                            <img src="{{ asset('assets/images/person_3.jpg') }}" alt="Image" class="img-fluid">
                        </figure>
                        <h3 class="name">Ricardo Asep</h3>
                        <blockquote>
                            <p>&ldquo;Pangandaran Fun Offroad is an outdoor activity that is perfect for relieving your
                                stress.
                                Explorers will traverse the land route from the Green Canyon trails to Batu Karas
                                beach.&rdquo;</p>
                        </blockquote>
                    </div>

                    <div class="testimonial mx-auto">
                        <figure class="img-wrap">
                            <img src="{{ asset('assets/images/person_4.jpg') }}" alt="Image" class="img-fluid">
                        </figure>
                        <h3 class="name">Kayla Bryant</h3>
                        <blockquote>
                            <p>&ldquo;Body Rafting Citumang Pangandaran, one of the Body Rafting spots that
                                has become a favorite and popular activity and location among visitors in
                                Pangandaran.&rdquo;</p>
                        </blockquote>
                    </div>
                    =======

                    @foreach ($testimonials as $testimoni)
                        <div class="testimonial mx-auto">
                            <figure class="img-wrap">
                                <img src="{{ asset('storage/' . $testimoni->photo_profile) }}" alt="Image"
                                    class="img-fluid">
                            </figure>
                            <h3 class="name">{{ $testimoni->title }}</h3>
                            <blockquote>
                                <p>&ldquo;{{ $testimoni->description }}&rdquo;</p>
                            </blockquote>
                        </div>
                    @endforeach

                    >>>>>>> 9781448deaeacf3be151bb4d5f69dfd5c2c35fdf

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
                    <p>Experienced and professional in serving tourists, presenting complete destinations
                        ranging from beaches, nature, to the culinary specialties of Pangandaran, collaborating
                        with trusted hotels and transportation, and offering affordable and transparent prices.</p>

                </div>
            </div>
        </div>
    </div>
    <!-- END section why choose us -->


    @include('layouts.frontend.blue')
@endsection
