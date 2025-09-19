@extends('layouts.backend.app')
@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Testimonials</h4>
                        </div>
                        <div class="card-body">
                            <form action="/admin/testimoni/update/{{ $testimoni->id }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="photo_profile" class="form-label">Ubah Foto Profile</label>
                                    <input type="file" class="form-control" name="photo_profile" id="photo_profile">

                                    @if ($testimoni->photo_profile)
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/' . $testimoni->photo_profile) }}" alt="Foto Lama"
                                                style="width:100px; border-radius:8px;">
                                        </div>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="title" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder=""
                                        required value="{{ $testimoni->name }}">
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="3">{{ $testimoni->description }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Rating</label>
                                    <div class="rating d-flex gap-2">
                                        <input type="radio" id="rate1" name="rating" value="1"
                                            {{ $testimoni->rating == 1 ? 'checked' : '' }}>
                                        <label for="rate1">1</label>

                                        <input type="radio" id="rate2" name="rating" value="2"
                                            {{ $testimoni->rating == 2 ? 'checked' : '' }}>
                                        <label for="rate2">2</label>

                                        <input type="radio" id="rate3" name="rating" value="3"
                                            {{ $testimoni->rating == 3 ? 'checked' : '' }}>
                                        <label for="rate3">3</label>

                                        <input type="radio" id="rate4" name="rating" value="4"
                                            {{ $testimoni->rating == 4 ? 'checked' : '' }}>
                                        <label for="rate4">4</label>

                                        <input type="radio" id="rate5" name="rating" value="5"
                                            {{ $testimoni->rating == 5 ? 'checked' : '' }}>
                                        <label for="rate5">5</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Tambah</button>
                                <a href="/admin/testimoni" class="btn btn-secondary">Kembali</a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
