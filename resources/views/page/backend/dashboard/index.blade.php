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
                            <h2 class="text-end text-white"><i class="float-start"></i><span>86</span> </h2>
                            <p class="m-b-0">Foto/Video<span class="float-end"></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card bg-grd-success order-card">
                        <div class="card-body">
                            <h6 class="text-white">Testimonials</h6>
                            <h2 class="text-end text-white"><i class="float-start"></i><span>1641</span>
                            </h2>
                            <p class="m-b-0">Pengunjung<span class="float-end"></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card bg-grd-warning order-card">
                        <div class="card-body">
                            <h6 class="text-white">Partners</h6>
                            <h2 class="text-end text-white"><i class="float-start"></i><span>4</span></h2>
                            <p class="m-b-0">Kerja Sama<span class="float-end"></span></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card bg-grd-danger order-card">
                        <div class="card-body">
                            <h6 class="text-white">Pesan Masuk</h6>
                            <h2 class="text-end text-white"><i class="float-start"></i><span>0</span></h2>
                            <p class="m-b-0">Belum Dibaca<span class="float-end"></span></p>
                        </div>
                    </div>
                </div>




                <!-- Recent Orders start -->
                <div class="col-sm-12">
                    <div class="card table-card">
                        <div class="card-header">
                            <h5>Aktivitas Terbaru</h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th>Nama Pengunjung</th>
                                        <th>Destinasi</th>
                                        <th>Ulasan Singkat</th>
                                        <th>Tanggal Ulasan</th>
                                        <th>Tipe Kunjungan</th>

                                    </tr>
                                    <tr>
                                        <td>Sahroni</td>
                                        <td>Cagar Alam</td>
                                        <td>Disana Ada Banyak Berbagai satwa Liar </td>
                                        <td>17-07-25</td>
                                        <td>Keluarga</td>

                                    </tr>


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Recent Orders end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
@endsection
