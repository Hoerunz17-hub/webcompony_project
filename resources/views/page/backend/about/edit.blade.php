@extends('layouts.backend.app')
@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit About</h4>
                        </div>
                        <div class="card-body">
                            <form action="/admin/about/update/{{ $aboutus->id }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Ubah Foto</label>
                                    <input type="file" class="form-control" name="foto" id="foto">

                                    @if ($aboutus->photo)
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/' . $aboutus->photo) }}" alt="Foto Lama"
                                                style="width:100px; border-radius:8px;">
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="3">{{ $aboutus->description }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Tambah</button>
                                <a href="#" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
