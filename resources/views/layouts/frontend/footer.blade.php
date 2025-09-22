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
                        <!-- License information: https://untree.co/license/ --> Distributed By <a
                            href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>

<div id="overlayer"></div>
<!-- loader -->
<div class="loader">
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- End loader -->

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

<script src="{{ asset('assets/js/custom.js') }}"></script>
