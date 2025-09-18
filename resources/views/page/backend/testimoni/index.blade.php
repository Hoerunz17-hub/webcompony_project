@extends('layouts.backend.app')

@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <div class="page-header">
                <div class="page-block card mb-0">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title border-bottom pb-2 mb-2">
                                    <h4 class="mb-0">Testimonials</h4>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="/admin/dashboard">
                                            Navigation <i class="ph ph-house"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0)">Testimonials</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Index</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-12">
                    <div class="card table-card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5>Aktivitas Terbaru</h5>
                            <a href="/admin/testimoni/create" class="btn fw-bold text-white"
                                style="background:#00ff66; border-radius:6px; padding:6px 18px;">
                                + Tambah
                            </a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="text-center">
                                            <th>ID</th>
                                            <th>Foto Profile</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Rating</th>
                                            <th>Status</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($testimonis->isEmpty())
                                            <tr>
                                                <td colspan="7" class="text-center py-4">
                                                    <strong>No Testimonials found.</strong>
                                                </td>
                                            </tr>
                                        @else
                                            @foreach ($testimonis as $testimoni)
                                                <tr class="text-center">
                                                    <td>{{ $testimoni->id }}</td>
                                                    <td>
                                                        @if ($testimoni->photo_profile)
                                                            <img src="{{ asset('storage/' . $testimoni->photo_profile) }}"
                                                                alt="Foto Profile"
                                                                style="width: 80px; height: auto; border-radius:8px; display:block; margin:0 auto;">
                                                        @else
                                                            <span class="text-muted">No image</span>
                                                        @endif
                                                    </td>
                                                    <td>{{ $testimoni->name }}</td>
                                                    <td>{{ $testimoni->description }}</td>
                                                    <td>{{ $testimoni->rating }}</td>
                                                    <td>
                                                        <div class="form-check form-switch d-flex justify-content-center">
                                                            <input class="form-check-input custom-switch-lg toggle-status"
                                                                type="checkbox" role="switch"
                                                                data-id="{{ $testimoni->id }}"
                                                                {{ $testimoni->is_active === 'active' ? 'checked' : '' }}>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="/admin/testimoni/edit/{{ $testimoni->id }}"
                                                            class="btn btn-sm text-white"
                                                            style="background:#00b4ff; border-radius:6px; padding:4px 16px; margin-right:6px;">
                                                            Edit
                                                        </a>
                                                        <a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                                            href="/admin/testimoni/delete/{{ $testimoni->id }}"
                                                            class="btn btn-sm text-white"
                                                            style="background:#ff4d6d; border-radius:6px; padding:4px 16px;">
                                                            Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .table td,
        .table th {
            vertical-align: middle;
        }

        .form-check-input.custom-switch-lg {
            width: 3.5em;
            height: 2em;
        }

        .form-check-input.custom-switch-lg:not(:checked) {
            background-color: #cfd4da;
            border-color: #cfd4da;
        }

        .form-check-input.custom-switch-lg:checked {
            background-color: #08ffde;
            border-color: #00c853;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".toggle-status").forEach(toggle => {
                toggle.addEventListener("change", function() {
                    let testiId = this.dataset.id;
                    let status = this.checked ? 1 : 0;

                    fetch(`/admin/testimoni/toggle/${testiId}`, {
                            method: "POST",
                            headers: {
                                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                                "Content-Type": "application/json",
                            },
                            body: JSON.stringify({
                                status: status
                            })
                        })
                        .then(res => res.json())
                        .then(data => {
                            console.log("Status updated:", data);
                        })
                        .catch(err => console.error("Error:", err));
                });
            });
        });
    </script>

@endsection
