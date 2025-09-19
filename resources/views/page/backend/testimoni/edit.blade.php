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

                                <div class="mb-3 d-flex align-items-center">
                                    <label class="form-label me-3 mb-0">Rating</label>
                                    <div class="star-rating">
                                        @for ($i = 5; $i >= 1; $i--)
                                            <input type="radio" id="star{{ $i }}" name="rating"
                                                value="{{ $i }}" {{ $testimoni->rating == $i ? 'checked' : '' }}>
                                            <label for="star{{ $i }}"
                                                title="{{ $i }} stars">&#9733;</label>
                                        @endfor
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

    <style>
        .star-rating {
            direction: rtl;
            display: flex;
            gap: 5px;
            font-size: 28px;
        }

        .star-rating input {
            display: none;
        }

        .star-rating label {
            color: #ccc;
            cursor: pointer;
            transition: color 0.2s;
        }

        .star-rating input:checked~label,
        .star-rating label:hover,
        .star-rating label:hover~label {
            color: #ffc107;
        }
    </style>
@endsection
