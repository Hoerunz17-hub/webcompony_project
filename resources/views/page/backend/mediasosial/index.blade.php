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
                                    <h4 class="mb-0">Media Social</h4>
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
                                        <a href="javascript:void(0)">Media Social</a>
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
                            <a href="/admin/media/create" class="btn fw-bold text-white"
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
                                            <th>Link</th>
                                            <th>Name Account</th>
                                            <th>Name Media Social</th>
                                            <th>Status</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($mediasosials->isEmpty())
                                            <tr>
                                                <td colspan="7" class="text-center">No Media Social found.</td>
                                            </tr>
                                        @endif
                                        @foreach ($mediasosials as $mediasosial)
                                            <tr class="text-center">
                                                <td>{{ $mediasosial->id }}</td>
                                                <td>
                                                    @if ($mediasosial->photo)
                                                        <img src="{{ asset('storage/' . $mediasosial->photo) }}"
                                                            alt="Hero Image"
                                                            style="width: 100px; height: auto; display:block; margin:0 auto;">
                                                    @else
                                                        <span class="text-muted">No image</span>
                                                    @endif
                                                </td>
                                                <td>{{ $mediasosial->link }}</td>
                                                <td>{{ $mediasosial->nameaccount }}</td>
                                                <td>{{ $mediasosial->namemediasocial }}</td>
                                                <td>
                                                    <div class="form-check form-switch d-flex justify-content-center">
                                                        <input class="form-check-input custom-switch-lg toggle-status"
                                                            type="checkbox" role="switch" data-id="{{ $mediasosial->id }}"
                                                            {{ $mediasosial->is_active === 'active' ? 'checked' : '' }}>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="/admin/media/edit/{{ $mediasosial->id }}"
                                                        style="background:#00b4ff; color:#fff; border-radius:6px; padding:4px 16px;
                                                          text-decoration:none; margin-right:6px; font-size:14px; display:inline-block;">
                                                        Edit
                                                    </a>
                                                    <a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                                        href="/admin/media/delete/{{ $mediasosial->id }}"
                                                        style="background:#ff4d6d; color:#fff; border-radius:6px; padding:4px 16px;
                                                          text-decoration:none; font-size:14px; display:inline-block;">
                                                        Delete
                                                    </a>
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
            document.querySelectorAll(".toggle-status").forEach(function(checkbox) {
                checkbox.addEventListener("change", function() {
                    let id = this.getAttribute("data-id");
                    let status = this.checked ? 1 : 0;

                    fetch(`/admin/media/toggle/${id}`, {
                            method: "POST",
                            headers: {
                                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                                "Content-Type": "application/json"
                            },
                            body: JSON.stringify({
                                status: status
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log("Status updated:", data);
                        })
                        .catch(error => console.error("Error:", error));
                });
            });
        });
    </script>
@endsection
