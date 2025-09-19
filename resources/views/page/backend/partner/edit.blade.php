@extends('layouts.backend.app')
@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Partners</h4>
                        </div>
                        <div class="card-body">
                            <form action="/admin/partner/update/{{ $partners->id }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="foto" class="form-label">Tambah Foto</label>
                                    <input type="file" class="form-control" name="foto" id="foto">
                                </div>

                                <div class="mb-3">
                                    <label for="title" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder=""
                                        required value="{{ $partners->name }}">
                                </div>


                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="3">{{ $partners->description }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Tambah</button>
                                <a href="/admin/partner" class="btn btn-secondary">Kembali</a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
