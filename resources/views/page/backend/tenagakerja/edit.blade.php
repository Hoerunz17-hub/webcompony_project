@extends('layouts.backend.app')
@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Tenaga Kerja</h4>
                        </div>
                        <div class="card-body">
                            <form action="/admin/tenagakerja/update/{{ $tenagakerja->id }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="foto" class="form-label">Ubah Foto</label>
                                    <input type="file" class="form-control" name="foto" id="foto">

                                    @if ($tenagakerja->photo)
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/' . $tenagakerja->photo) }}" alt="Foto Lama"
                                                style="width:100px; border-radius:8px;">
                                        </div>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder=""
                                        required value="{{ $tenagakerja->name }}">
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="3">{{ $tenagakerja->description }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Position</label>
                                    <input type="text" class="form-control" name="posisi" id="posisi" placeholder=""
                                        required value="{{ $tenagakerja->position }}">
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Tambah</button>
                                <a href="/admin/tenagakerja" class="btn btn-secondary">Kembali</a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
