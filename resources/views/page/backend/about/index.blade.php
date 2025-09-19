@extends('layouts.backend.app')

@section('content')
    <div class="pc-container">
        <div class="pc-content">
            {{-- Page Header --}}
            <div class="page-header">
                <div class="page-block card mb-0">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title border-bottom pb-2 mb-2">
                                    <h4 class="mb-0">About</h4>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="/admin/dashboard">
                                            Navigation <i class="ph ph-house"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">About</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Index</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Content --}}
            <div class="row">
                <div class="col-sm-12">
                    <div class="card table-card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Aktivitas Terbaru</h5>
                            <a href="/admin/about/create" class="btn btn-add">+ Tambah</a>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table about-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($aboutss->isEmpty())
                                            <tr>
                                                <td colspan="5" class="text-center text-muted">No About found.</td>
                                            </tr>
                                        @endif
                                        @foreach ($aboutss as $about)
                                            <tr>
                                                <td>{{ $about->id }}</td>
                                                <td>
                                                    @if ($about->photo)
                                                        <img src="{{ asset('storage/' . $about->photo) }}" alt="Hero Image"
                                                            class="about-img">
                                                    @else
                                                        <span class="text-muted">No image</span>
                                                    @endif
                                                </td>
                                                <td class="text-start">{{ $about->description }}</td>
                                                <td>
                                                    <div class="form-check form-switch d-flex justify-content-center">
                                                        <input class="form-check-input custom-switch-lg toggle-status"
                                                            type="checkbox" role="switch" data-id="{{ $about->id }}"
                                                            {{ $about->is_active === 'active' ? 'checked' : '' }}>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="about-actions">
                                                        <a href="/admin/about/edit/{{ $about->id }}"
                                                            class="btn-edit">Edit</a>
                                                        <a href="/admin/about/delete/{{ $about->id }}"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                                            class="btn-delete">Delete</a>
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

    {{-- CSS --}}
    <style>
        .about-table th,
        .about-table td {
            vertical-align: middle;
            text-align: center;
        }

        .about-img {
            width: 100px;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        /* Tombol tambah */
        .btn-add {
            background: #00ff66;
            border-radius: 6px;
            padding: 6px 18px;
            font-weight: bold;
            color: #fff;
            text-decoration: none;
        }

        .btn-add:hover {
            opacity: 0.85;
        }

        /* Tombol actions */
        .about-actions {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .about-actions a {
            border-radius: 6px;
            padding: 6px 16px;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            transition: 0.2s ease;
            color: #fff;
        }

        .btn-edit {
            background: #00b4ff;
        }

        .btn-delete {
            background: #ff4d6d;
        }

        .about-actions a:hover {
            opacity: 0.85;
        }

        /* Switch */
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

    {{-- Script --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".toggle-status").forEach(toggle => {
                toggle.addEventListener("change", function() {
                    let aboutId = this.dataset.id;
                    let status = this.checked ? 1 : 0;

                    fetch(`/admin/about/toggle/${aboutId}`, {
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
                        .then(data => console.log("Status updated:", data))
                        .catch(err => console.error("Error:", err));
                });
            });
        });
    </script>
@endsection
