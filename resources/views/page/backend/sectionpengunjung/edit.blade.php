@extends('layouts.backend.app')
@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Client</h4>
                        </div>
                        <div class="card-body">
                            <form action="/admin/pengunjung/update/{{ $datapengunjungs->id }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="title" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder=""
                                        required value="{{ $datapengunjungs->name }}">
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="3">{{ $datapengunjungs->description }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Tambah</button>
                                <a href="/admin/pengunjung" class="btn btn-secondary">Kembali</a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
