@extends('layouts.backend.app')
@section('content')
    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card bg-grd-primary order-card">
                        <div class="card-body">
                            <h6 class="text-white">Gallery</h6>
                            <h2 class="text-end text-white">
                                <i class="float-start"></i><span>{{ $galleryCount }}</span>
                            </h2>
                            <p class="m-b-0">Foto/Video<span class="float-end"></span></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card bg-grd-success order-card">
                        <div class="card-body">
                            <h6 class="text-white">Testimonials</h6>
                            <h2 class="text-end text-white">
                                <i class="float-start"></i><span>{{ $testimonialCount }}</span>
                            </h2>
                            <p class="m-b-0">Pengunjung<span class="float-end"></span></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card bg-grd-warning order-card">
                        <div class="card-body">
                            <h6 class="text-white">Partners</h6>
                            <h2 class="text-end text-white">
                                <i class="float-start"></i><span>{{ $partnerCount }}</span>
                            </h2>
                            <p class="m-b-0">Kerja Sama<span class="float-end"></span></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card bg-grd-danger order-card">
                        <div class="card-body">
                            <h6 class="text-white">Pesan Masuk</h6>
                            <h2 class="text-end text-white">
                                <i class="float-start"></i><span>{{ $pesanMasukCount }}</span>
                            </h2>
                            <p class="m-b-0">Belum Dibaca<span class="float-end"></span></p>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Recent Orders start -->
            <div class="col-sm-12 mt-4">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Recent Login History</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Email</th>
                                        <th>IP Address</th>
                                        <th>Browser</th>
                                        <th>OS</th>
                                        <th>Login At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($loginHistories as $history)
                                        @php
                                            $agent = new Jenssegers\Agent\Agent();
                                            $agent->setUserAgent($history->user_agent);
                                        @endphp
                                        <tr>
                                            <td>{{ $history->user->name }}</td>
                                            <td>{{ $history->user->email }}</td>
                                            <td>{{ $history->ip_address }}</td>
                                            <td>{{ $agent->browser() }} {{ $agent->version($agent->browser()) }}</td>
                                            <td>{{ $agent->platform() }} {{ $agent->version($agent->platform()) }}</td>
                                            <td>{{ $history->created_at->timezone('Asia/Jakarta')->format('d-m-Y H:i') }}
                                            </td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Belum ada history login</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>





        </div>
        <!-- [ Main Content ] end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection
