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
                                    <h4 class="mb-0">Sejarah</h4>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="/admin/dashboard">
                                            Navigation <i class="ph ph-house"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Sejarah</a></li>
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
                            <a href="/admin/sejarah/create" class="btn btn-add">+ Tambah</a>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table sejarah-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($sejarah->isEmpty())
                                            <tr>
                                                <td colspan="6" class="text-center text-muted">No Sejarah found.</td>
                                            </tr>
                                        @endif
                                        @foreach ($sejarah as $history)
                                            <tr>
                                                <td>{{ $history->id }}</td>
                                                <td>
                                                    @if ($history->photo)
                                                        <img src="{{ asset('storage/' . $history->photo) }}"
                                                            alt="Sejarah Image" class="sejarah-img">
                                                    @else
                                                        <span class="text-muted">No image</span>
                                                    @endif
                                                </td>
                                                <td>{{ $history->title }}</td>
                                                <td class="text-start">{{ $history->description }}</td>
                                                <td>
                                                    <div class="form-check form-switch d-flex justify-content-center">
                                                        <input class="form-check-input custom-switch-lg toggle-status"
                                                            type="checkbox" role="switch" data-id="{{ $history->id }}"
                                                            {{ $history->is_active === 'active' ? 'checked' : '' }}>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="sejarah-actions">
                                                        <a href="/admin/sejarah/edit/{{ $history->id }}"
                                                            class="btn-edit">Edit</a>
                                                        <a href="/admin/sejarah/delete/{{ $history->id }}"
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
        .sejarah-table th,
        .sejarah-table td {
            vertical-align: middle;
            text-align: center;
        }

        .sejarah-img {
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
        .sejarah-actions {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .sejarah-actions a {
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

        .sejarah-actions a:hover {
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
                    let sejarahId = this.dataset.id;
                    let status = this.checked ? 1 : 0;

                    fetch(`/admin/sejarah/toggle/${sejarahId}`, {
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
