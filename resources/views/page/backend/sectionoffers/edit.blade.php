@extends('layouts.backend.app')
@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Section Offers</h4>
                        </div>
                        <div class="card-body">
                            <form action="/admin/discont/update/{{ $discont->id }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="foto" class="form-label">Ubah Foto</label>
                                    <input type="file" class="form-control" name="foto" id="foto">
                                    @if ($discont->photo)
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/' . $discont->photo) }}" alt="Foto Lama"
                                                style="width:100px; border-radius:8px;">
                                        </div>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder=""
                                        required value="{{ $discont->title }}">
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="3">{{ $discont->description }}</textarea>
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Tambah</button>
                                <a href="/admin/discont" class="btn btn-secondary">Kembali</a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
