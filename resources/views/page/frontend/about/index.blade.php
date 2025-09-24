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
                    <p>Kami adalah tim yang berdedikasi untuk memberikan pelayanan terbaik dalam setiap perjalanan wisata
                        Anda. Dengan pengalaman dan semangat kerja sama, kami siap memastikan liburan di Pangandaran menjadi
                        lebih mudah, nyaman, dan menyenangkan.</p>
                </div>
            </div>

            <div class="row justify-content-center">
                @foreach ($tenagakerjas as $tenagakerja)
                    <div class="col-lg-3 mb-4">
                        <div class="team text-center">
                            <div class="team-photo">
                                <img src="{{ asset('storage/' . $tenagakerja->photo) }}" alt="Image"
                                    class="img-fluid rounded-20">
                            </div>
                            <div class="px-3 mt-3">
                                <h3 class="mb-0">{{ $tenagakerja->name }}</h3>
                                <p>{{ $tenagakerja->position }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                        @foreach ($testimonials as $testimoni)
                            <div class="testimonial mx-auto">
                                <figure class="img-wrap">
                                    <img src="{{ asset('storage/' . $testimoni->photo_profile) }}" alt="Image"
                                        class="img-fluid rounded-circle"
                                        style="width: 100px; height: 100px; object-fit: cover;">
                                </figure>
                                <h3 class="name">{{ $testimoni->title }}</h3>
                                <blockquote>
                                    <p>&ldquo;{{ $testimoni->description }}&rdquo;</p>
                                </blockquote>

                                {{-- ⭐ Tampilkan rating di sini --}}
                                <div class="rating">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $testimoni->rating)
                                            <span style="color:#ffc107; font-size:20px;">&#9733;</span>
                                        @else
                                            <span style="color:#e4e5e9; font-size:20px;">&#9733;</span>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                        @endforeach
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
