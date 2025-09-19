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

    <div class="hero hero-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mx-auto text-center">
                    <div class="intro-wrap">
                        <h1 class="mb-0">Our Contact</h1>
                        <p class="text-white">Hubungi kami untuk informasi lebih lanjut, pemesanan paket wisata, atau kerja
                            sama. Kami siap membantu Anda menikmati pengalaman terbaik di Pangandaran. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- message -->
    <div class="untree_co-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 ml-auto">
                    <form action="/contact/store" method="POST" data-aos="fade-up" data-aos-delay="200">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-black" for="fname">First name</label>
                                    <input type="text" name="firstname" class="form-control" id="firstname">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-black" for="lname">Last name</label>
                                    <input type="text" name="lastname" class="form-control" id="lastname">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-black" for="email">Subject</label>
                            <input type="text" name="subject" class="form-control" id="subject">
                        </div>

                        <div class="form-group">
                            <label class="text-black" for="message">Message</label>
                            <textarea name="description" class="form-control" id="description" cols="30" rows="5"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
                <div class="col-lg-5 ml-auto">
                    <div class="quick-contact-item d-flex align-items-center mb-4">
                        <span class="flaticon-house"></span>
                        <address class="text">
                            West Coast Street No.19 46396 Pangandaran Village West Java
                        </address>
                    </div>
                    <div class="quick-contact-item d-flex align-items-center mb-4">
                        <span class="flaticon-phone-call"></span>
                        <address class="text">
                            +1 202 2020 200
                        </address>
                    </div>
                    <div class="quick-contact-item d-flex align-items-center mb-4">
                        <span class="flaticon-mail"></span>
                        <address class="text">
                            @info@mydomain.com
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end message -->

    {{-- Modal Success --}}
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content text-center p-4">
                <div class="modal-body">
                    <div class="mb-3">
                        <i class="icofont-check-circled text-success" style="font-size: 60px;"></i>
                    </div>
                    <h4 class="mb-2">Pesan Anda Berhasil Dikirim!</h4>
                    <p class="text-muted">{{ session('success') }}</p>
                    <button type="button" class="btn btn-primary mt-3" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Script untuk auto show modal --}}
    @if (session('success'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                $('#successModal').modal('show');
            });
        </script>
    @endif
@endsection
