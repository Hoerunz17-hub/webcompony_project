<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <title>Tour Free Bootstrap Template for Travel Agency by Untree.co</title>
</head>

<body>


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    {{-- navbar --}}
    <nav class="site-nav">
        <div class="container">
            <div class="site-navigation">
                <a href="index.html" class="logo m-0">PANORAID <span class="text-primary"></span></a>

                <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
                    <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="/about">About</a></li>
                    <li class="{{ Request::is('service') ? 'active' : '' }}"><a href="/service">Services</a></li>
                    <li class="{{ Request::is('galery') ? 'active' : '' }}"><a href="/galery">Gallery</a></li>
                    <li class="{{ Request::is('partner') ? 'active' : '' }}"><a href="/partner">Partners</a></li>
                    </li>
                    <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="/contact">Contact Us</a></li>
                </ul>

            </div>
        </div>
    </nav>
    {{-- end navbar --}}

    {{-- bawah navbar --}}
    <div class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="intro-wrap">
                        <h1 class="mb-5"><span class="d-block">Enjoy Your</span> Trip In <span
                                class="typed-words"></span></h1>

                        <div class="row">
                            <div class="col-12">
                                <form class="form" method="GET" action="{{ route('search') }}">
                                    <div class="row mb-2">
                                        <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                                            <select name="destination" class="form-control custom-select">
                                                <option value="cagar-alam">Cagar Alam</option>
                                                <option value="green-canyon">Green Canyon</option>
                                                <option value="pantai-batu-karas">Pantai Batu Karas</option>
                                                <option value="green-valley">Green Valley</option>
                                                <option value="pantai-mandasari">Pantai Madasari</option>
                                                <option value="wonder-hill-jojogan">Wonder Hill Jojogan</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-5">
                                            <input type="text" class="form-control" name="daterange">
                                        </div>

                                        <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-3">
                                            <input type="text" class="form-control" name="people"
                                                placeholder="# of People">
                                        </div>
                                    </div>

                                    <div class="row align-items-center">
                                        <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                                            <input type="submit" class="btn btn-primary btn-block" value="Search">
                                        </div>
                                        <div class="col-lg-8">
                                            <label class="control control--checkbox mt-3">
                                                <span class="caption">Save this search</span>
                                                <input type="checkbox" name="save_search" value="1"
                                                    checked="checked" />
                                                <div class="control__indicator"></div>
                                            </label>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="slides">

                        @foreach ($heros as $hero)
                            <img src="{{ asset('storage/' . $hero->photo) }}" alt="Image"class="img-fluid active">
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end bawah navbar --}}

    {{-- services --}}
    <div class="untree_co-section">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2 class="section-title text-center mb-3">Our Services</h2>
                    <p>Menyediakan Berbagai Layanan Service Mewah Dimulai Dari Hotel Bintang Lima Serta Makanan Five
                        Star</p>
                </div>
            </div>
            <div class="row align-items-stretch">
                <div class="col-lg-4 order-lg-1">
                    <div class="h-100">
                        <div class="frame h-100">
                            <div class="feature-img-bg h-100"
                                style="background-image: url({{ asset('assets/images/pantai/the-arwana.jpg') }});">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-6 col-sm-6 col-lg-8  feature-1-wrap d-md-flex flex-md-column order-lg-1 ">
                    <div class="row">
                        @foreach ($services as $service)
                            <div class="col-lg-5 mx-2 feature-1 d-md-flex">
                                <div class="align-self-center">
                                    {{-- <span class="flaticon-house display-4 text-primary"></span> --}}
                                    <img src="{{ asset('storage/' . $service->photo) }}" width="50"
                                        alt="">
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
    {{-- end services --}}

    <div class="untree_co-section count-numbers py-5">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="counter-wrap">
                        <div class="counter">
                            <span class="" data-number="9313">0</span>
                        </div>
                        <span class="caption">No. of Travels</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="counter-wrap">
                        <div class="counter">
                            <span class="" data-number="8492">0</span>
                        </div>
                        <span class="caption">No. of Clients</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="counter-wrap">
                        <div class="counter">
                            <span class="" data-number="100">0</span>
                        </div>
                        <span class="caption">No. of Employees</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="counter-wrap">
                        <div class="counter">
                            <span class="" data-number="120">0</span>
                        </div>
                        <span class="caption">No. of Countries</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- destinasi -->
    <div class="untree_co-section">
        <div class="container">
            <div class="row text-center justify-content-center mb-5">
                <div class="col-lg-7">
                    <h2 class="section-title text-center">Popular Destination</h2>
                </div>
            </div>

            <div class="owl-carousel owl-3-slider">
                @foreach ($gallerys as $gallery)
                    <div class="item">
                        <a class="media-thumb" href="{{ asset('storage/' . $gallery->photo) }}"
                            data-fancybox="gallery">
                            <div class="media-text">
                                <h3>{{ $gallery->title }}</h3>
                                <span class="location">{{ $gallery->description }}</span>
                            </div>
                            <img src="{{ asset('storage/' . $gallery->photo) }}" alt="Image" class="img-fluid">
                        </a>
                    </div>
                @endforeach
            </div>


        </div>
    </div>
    <!-- end destinasi -->

    <!-- testimonial -->
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

    <!-- end testimonial -->

    <!--- special officer -->
    <div class="untree_co-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-6">
                    <h2 class="section-title text-center mb-3">Special Offers &amp; Discounts</h2>
                    <p>Dapatkan promo dan diskon terbaik untuk perjalanan wisata Anda di Pangandaran</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="media-1">
                        <a href="#" class="d-block mb-3"><img
                                src="{{ asset('assets/images/pantai/Green-Canyon.jpeg') }}" alt="Image"
                                class="img-fluid"></a>
                        <span class="d-flex align-items-center loc mb-2">
                            <span class="icon-room mr-3"></span>
                            <span>Indonesian</span>
                        </span>
                        <div class="d-flex align-items-center">
                            <div>
                                <h3><a href="#">Green Canyon</a></h3>
                                <div class="price ml-auto">
                                    <span>Rp. 10.000</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="media-1">
                        <a href="#" class="d-block mb-3"><img
                                src="{{ asset('assets/images/pantai/pantai-madasari-west-java-indonesia.jpg') }}"
                                alt="Image" class="img-fluid"></a>
                        <span class="d-flex align-items-center loc mb-2">
                            <span class="icon-room mr-3"></span>
                            <span>Indonesian</span>
                        </span>
                        <div class="d-flex align-items-center">
                            <div>
                                <h3><a href="#">Pantai Madasari</a></h3>
                                <div class="price ml-auto">
                                    <span>Rp. 5.000</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="media-1">
                        <a href="#" class="d-block mb-3"><img
                                src="{{ asset('/assets/images/pantai/sungai-citumang.jpg') }}" alt="Image"
                                class="img-fluid"></a>
                        <span class="d-flex align-items-center loc mb-2">
                            <span class="icon-room mr-3"></span>
                            <span>Indonesian</span>
                        </span>
                        <div class="d-flex align-items-center">
                            <div>
                                <h3><a href="#">Sungai Citumang</a></h3>
                                <div class="price ml-auto">
                                    <span>Rp. 20.000</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="media-1">
                        <a href="#" class="d-block mb-3"><img
                                src="{{ asset('assets/images/pantai/pantai-karang-nini.jpg') }}" alt="Image"
                                class="img-fluid"></a>

                        <span class="d-flex align-items-center loc mb-2">
                            <span class="icon-room mr-3"></span>
                            <span>Indonesian</span>
                        </span>

                        <div class="d-flex align-items-center">
                            <div>
                                <h3><a href="#">Pantai Karang Nini</a></h3>
                                <div class="price ml-auto">
                                    <span>Rp. 7.500</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="untree_co-section">
        <div class="container">
            <div class="row justify-content-between align-items-center">

                <div class="col-lg-6">
                    <figure class="img-play-video">
                        <a id="play-video" class="video-play-button"
                            href="https://youtu.be/gm2bD_YX4lk?si=_Fpe2DO8l7ESEmam" data-fancybox>
                            <span></span>
                        </a>
                        <img src="{{ asset('assets/images/pantai/pnd-thumbnail.jpg') }}" alt="Image"
                            class="img-fluid rounded-20">
                    </figure>
                </div>

                <div class="col-lg-5">
                    <h2 class="section-title text-left mb-4">Take a look at Tour Video</h2>
                    <p>The name "Pangandaran" has three meanings, namely the word andar, andar-andar, and pangan +
                        daharan.
                        Andar-andar, in Sundanese, means "traveler" or "immigrant".
                        This is because the area was previously a place opened by the Sunda tribe fishermen.</p>

                    <p class="mb-4">In the folklore created by the people of Pangandaran,
                        Pangandaran was formed when the Pananjung Village was
                        first opened by the fishermen of the Sundanese tribe.</p>

                    <ul class="list-unstyled two-col clearfix">
                        <li>Aquarium Indonesia</li>
                        <li>Pantai Batu Hiu</li>
                        <li>Pantai Madasari</li>
                        <li>Pantai Timur Pangandaran</li>
                        <li>Pantai Barat Pangandaran</li>
                        <li>Pantai Karapyak</li>
                        <li>Sungai Citumang</li>
                        <li>Pantai Batu Karas</li>
                        <li>Pantai Karang Nini</li>
                        <li>Green Canyon Pangandaran</li>
                    </ul>

                    <p><a href="#" class="btn btn-primary">Get Started</a></p>


                </div>
            </div>
        </div>
    </div>


    {{-- footer blue --}}
    <div class="py-5 cta-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="mb-2 text-white">Lets you Explore the Best. Contact Us Now</h2>

                    <p class="mb-4 lead text-white text-white-opacity">Capek Mikirin Masalah Hidup?, Capek Dikerjar
                        Rentenir? Healing Di PND Solusinya!</p>

                    <p class="mb-0"><a href="/contact"
                            class="btn btn-outline-white text-white btn-md font-weight-bold">Get in touch</a></p>
                </div>
            </div>
        </div>
    </div>
    {{-- end footer blue --}}

    {{-- footer --}}
    <div class="site-footer">
        <div class="inner first">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="widget">

                            <h3 class="heading">About Us</h3>
                            <p>Penyedia layanan wisata Pangandaran dengan destinasi lengkap, pelayanan ramah, dan harga
                                terjangkau untuk pengalaman liburan terbaik Anda.</p>

                        </div>
                        <div class="widget">
                            <ul class="list-unstyled social">
                                @foreach ($master as $item)
                                    <li>
                                        <a href="#" style="background: white;">
                                            <img src="{{ asset('storage/' . $item->photo) }}" alt="icon"
                                                style="width:28px; height:28px; object-fit:contain; display:block; z-index: 100;">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 pl-lg-5">
                        <div class="widget">
                            <h3 class="heading">Pages</h3>
                            <ul class="links list-unstyled">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="widget">
                            <h3 class="heading">Resources</h3>
                            <ul class="links list-unstyled">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="widget">
                            <h3 class="heading">Contact</h3>
                            <ul class="list-unstyled quick-info links">
                                <li class="email"><a href="#">mail@example.com</a></li>
                                <li class="phone"><a href="#">+1 222 212 3819</a></li>
                                <li class="address"><a href="#">43 Raymouth Rd. Baltemoer, London 3910</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="inner dark">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-8 mb-3 mb-md-0 mx-auto">
                        <p>Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>. All Rights Reserved. &mdash; Designed with love by <a
                                href="https://untree.co" class="link-highlight">Untree.co</a>
                            <!-- License information: https://untree.co/license/ -->Distributed By <a
                                href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- end footer --}}

    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>


    <script>
        const destinations = [
            "Cagar Alam",
            "Green Canyon",
            "Green Valley",
            "Pantai Batu Hiu",
            "Pantai Batu Karas",
            "Pantai Karapyak",
            "Pantai Madasari",
            "Watersports",
            "Wonder Hill Jojogan"
        ];

        const input = document.getElementById('destination');
        const suggestions = document.getElementById('suggestions');

        input.addEventListener('input', function() {
            const query = this.value.toLowerCase();
            suggestions.innerHTML = '';

            if (query.length > 0) {
                const filtered = destinations.filter(d => d.toLowerCase().includes(query));
                filtered.forEach(d => {
                    const item = document.createElement('a');
                    item.classList.add('list-group-item', 'list-group-item-action');
                    item.textContent = d;
                    item.href = "#";
                    item.onclick = (e) => {
                        e.preventDefault();
                        input.value = d;
                        suggestions.innerHTML = '';
                    };
                    suggestions.appendChild(item);
                });
            }
        });

        // hilangkan suggestion kalau klik di luar
        document.addEventListener('click', function(e) {
            if (!input.contains(e.target) && !suggestions.contains(e.target)) {
                suggestions.innerHTML = '';
            }
        });
    </script>


    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/daterangepicker.js') }}"></script>

    <script src="{{ asset('assets/js/typed.js') }}"></script>

    <script>
        var tes = @json($hirotiles);

        $(function() {

            var slides = $('.slides'),
                images = slides.find('img');

            images.each(function(i) {
                $(this).attr('data-id', i + 1);
            })

            var typed = new Typed('.typed-words', {

                strings: tes,

                typeSpeed: 80,
                backSpeed: 80,
                backDelay: 4000,
                startDelay: 1000,
                loop: true,
                showCursor: true,
                preStringTyped: (arrayPos, self) => {
                    arrayPos++;
                    console.log(arrayPos);
                    $('.slides img').removeClass('active');
                    $('.slides img[data-id="' + arrayPos + '"]').addClass('active');
                }

            });
        })
    </script>

    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
