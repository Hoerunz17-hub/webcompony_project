@extends('layouts.backend.app')
@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Media Social</h4>
                        </div>
                        <div class="card-body">
                            <form action="/admin/media/store" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="" class="form-label">Tambah Foto</label>
                                    <input type="file" class="form-control" name="foto" id="foto">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Link</label>
                                    <input type="url" class="form-control" name="link" id="link" placeholder=""
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Name Account</label>
                                    <input type="text" class="form-control" name="nameaccount" id="nameaccount"
                                        placeholder="" required>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Name Media Social</label>
                                    <input type="text" class="form-control" name="mediasosial" id="mediasosial"
                                        placeholder="" required>
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Tambah</button>
                                <a href="/admin/media" class="btn btn-secondary">Kembali</a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
