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
                                    <h4 class="mb-0">Services</h4>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="../dashboard/index.html">
                                            Navigation <i class="ph ph-house"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0)">Services</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Index</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card table-card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5>Aktivitas Terbaru</h5>
                            <a href="/admin/service/create" class="btn fw-bold text-white"
                                style="background:#00ff66; border-radius:6px; padding:6px 18px;">
                                + Tambah
                            </a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="text-center">
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Descrption</th>
                                            <th>Status</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($services->isEmpty())
                                            <tr>
                                                <td colspan="7" class="text-center">No Services found.</td>
                                            </tr>
                                        @endif
                                        @foreach ($services as $service)
                                            <tr class="text-center">
                                                <td>{{ $service->id }}</td>
                                                <td>
                                                    @if ($service->photo)
                                                        <img src="{{ asset('storage/' . $service->photo) }}"
                                                            alt="Hero Image">
                                                    @else
                                                        <span class="text-muted">No image</span>
                                                    @endif
                                                </td>
                                                <td>{{ $service->title }}</td>
                                                <td>{{ $service->description }}</td>
                                                <td>
                                                    <div class="form-check form-switch d-flex justify-content-center">
                                                        <input class="form-check-input custom-switch-lg toggle-status"
                                                            type="checkbox" role="switch" data-id="{{ $service->id }}"
                                                            {{ $service->is_active === 'active' ? 'checked' : '' }}>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center align-items-center gap-3">
                                                        <a href="/admin/service/edit/{{ $service->id }}" class="btn-edit">
                                                            Edit
                                                        </a>
                                                        <a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                                            href="/admin/service/delete/{{ $service->id }}"
                                                            class="btn-delete">
                                                            Delete
                                                        </a>
                                                    </div>
                                                </td>


                                            </tr>
                                        @endforeach
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
        /* Table lebih rapi */
        .table {
            border-collapse: separate;
            border-spacing: 0 8px;
            /* jarak antar baris */
            font-size: 14px;
        }

        .table th,
        .table td {
            padding: 12px 16px;
            /* ruang dalam cell */
            text-align: center;
            vertical-align: middle;
        }

        .table thead th {
            background-color: #f8f9fa;
            font-weight: 600;
            border-bottom: 2px solid #e9ecef;
        }

        .table tbody tr {
            background-color: #fff;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        .table img {
            border-radius: 6px;
            max-height: 80px;
            object-fit: cover;
            display: block;
            margin: 0 auto;
        }

        /* Tombol edit dan delete */
        .btn-edit,
        .btn-delete {
            border-radius: 6px;
            padding: 6px 16px;
            font-size: 14px;
            text-decoration: none;
            color: #fff;
            display: inline-block;
            margin: 0 4px;
        }

        .btn-edit {
            background: #00b4ff;
        }

        .btn-delete {
            background: #ff4d6d;
        }

        /* Switch toggle */
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

        .btn-edit,
        .btn-delete {
            border-radius: 6px;
            padding: 8px 18px;
            font-size: 14px;
            text-decoration: none;
            color: #fff;
            display: inline-block;
        }

        .btn-edit {
            background: #00b4ff;
        }

        .btn-delete {
            background: #ff4d6d;
        }

        /* pastikan cell tombol pakai flex */
        td.d-flex {
            align-items: center;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".toggle-status").forEach(toggle => {
                toggle.addEventListener("change", function() {
                    let serviceId = this.dataset.id;
                    let status = this.checked ? 1 : 0;

                    fetch(`/admin/service/toggle/${serviceId}`, {
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
