@extends('layouts.backend.app')
@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Testimonials</h4>
                        </div>
                        <div class="card-body">
                            <form action="/admin/testimoni/store" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="foto" class="form-label">Tambah Foto Profile</label>
                                    <input type="file" class="form-control" name="photo_profile" id="foto_profile">
                                </div>

                                <div class="mb-3">
                                    <label for="title" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder=""
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Rating</label>
                                    <div class="rating">
                                        <input type="radio" id="1" name="rating" value="1">
                                        <label for="">1</label>

                                        <input type="radio" id="2" name="rating" value="2">
                                        <label for="">2</label>

                                        <input type="radio" id="3" name="rating" value="3">
                                        <label for="">3</label>

                                        <input type="radio" id="rating" name="rating" value="4">
                                        <label for="">4</label>

                                        <input type="radio" id="rating" name="rating" value="5">
                                        <label for="">5</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Tambah</button>
                                <a href="/admin/galery" class="btn btn-secondary">Kembali</a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
