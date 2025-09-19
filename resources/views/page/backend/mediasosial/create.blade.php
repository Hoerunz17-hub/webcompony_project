@extends('layouts.backend.app')
@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Media Social</h4>
                        </div>
                        <div class="card-body">
                            <form action="/admin/media/store" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="" class="form-label">Tambah Foto</label>
                                    <input type="file" class="form-control" name="foto" id="foto">
                                    {{-- Preview Gambar --}}
                                    <div class="mt-3">
                                        <img id="preview" src="#" alt="Preview Gambar"
                                            style="max-width: 100%; height: auto; display: none; border:1px solid #ddd; border-radius:8px; padding:5px;" />
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Link</label>
                                    <input type="url" class="form-control" name="link" id="link" placeholder=""
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Name Account</label>
                                    <input type="text" class="form-control" name="nameaccount" id="nameaccount"
                                        placeholder="" required>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Name Media Social</label>
                                    <input type="text" class="form-control" name="mediasosial" id="mediasosial"
                                        placeholder="" required>
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Tambah</button>
                                <a href="/admin/media" class="btn btn-secondary">Kembali</a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Script Preview --}}
    <script>
        document.getElementById("foto").addEventListener("change", function(event) {
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
