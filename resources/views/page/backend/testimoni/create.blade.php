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
                                    {{-- Preview Gambar --}}
                                    <div class="mt-3">
                                        <img id="preview" src="#" alt="Preview Gambar"
                                            style="max-width: 100%; height: auto; display: none; border:1px solid #ddd; border-radius:8px; padding:5px;" />
                                    </div>
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

                                <div class="mb-3 d-flex align-items-center">
                                    <label class="form-label me-3 mb-0">Rating</label>
                                    <div class="star-rating">
                                        @for ($i = 5; $i >= 1; $i--)
                                            <input type="radio" id="star{{ $i }}" name="rating"
                                                value="{{ $i }}" />
                                            <label for="star{{ $i }}"
                                                title="{{ $i }} stars">&#9733;</label>
                                        @endfor
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
    {{-- Script Preview --}}
    <script>
        document.getElementById("foto_profile").addEventListener("change", function(event) {
            let reader = new FileReader();
            reader.onload = function() {
                let preview = document.getElementById("preview");
                preview.src = reader.result;
                preview.style.display = "block";
            }
            if (event.target.files[0]) {
                reader.readAsDataURL(event.target.files[0]);
            }
        });
    </script>
@endsection
