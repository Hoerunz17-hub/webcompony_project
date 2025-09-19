@extends('layouts.backend.app')
@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Hero</h4>
                        </div>
                        <div class="card-body">
                            <form action="/admin/hero/update/{{ $hero->id }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder=""
                                        value="{{ $hero->title }}">
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Ubah Foto</label>
                                    <input type="file" class="form-control" name="foto" id="foto">

                                    @if ($hero->photo)
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/' . $hero->photo) }}" alt="Foto Lama"
                                                style="width:100px; border-radius:8px;">
                                        </div>
                                    @endif
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
