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
                                    <h4 class="mb-0">Contact Us</h4>
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
                                        <a href="javascript:void(0)">Contact Us</a>
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

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="text-center">
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Subject</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($contacts->isEmpty())
                                            <tr>
                                                <td colspan="7" class="text-center">No Contact Us found.</td>
                                            </tr>
                                        @endif
                                        @foreach ($contacts as $contactus)
                                            <tr class="text-center">
                                                <td>{{ $contactus->id }}</td>
                                                <td>{{ $contactus->first_name }}</td>
                                                <td>{{ $contactus->last_name }}</td>
                                                <td>{{ $contactus->subject }}</td>
                                                <td>{{ $contactus->description }}</td>
                                                <td>
                                                    <span
                                                        class="badge {{ $contactus->is_active === 'active' ? 'bg-success' : 'bg-secondary' }}">
                                                        {{ $contactus->is_active === 'active' ? 'Dibaca' : 'Belum Dibaca' }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <a href="/admin/contact/show/{{ $contactus->id }}"
                                                        style="background:#00b4ff; color:#fff; border-radius:6px; padding:4px 16px;
                                                          text-decoration:none; margin-right:6px; font-size:14px; display:inline-block;">
                                                        Show
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

                    fetch(`/admin/contact/toggle/${id}`, {
                            method: "POST",
                            headers: {
                                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                                "Content-Type": "application/json"
                            },
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log("Status updated:", data);
                        })
                        .catch(error => console.error("Error:", error));
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".toggle-status").forEach(function(checkbox) {
                checkbox.addEventListener("change", function() {
                    let id = this.getAttribute("data-id");
                    let statusLabel = this.closest("div").querySelector(".status-label");

                    fetch(`/admin/contact/toggle/${id}`, {
                            method: "POST",
                            headers: {
                                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                                "Content-Type": "application/json"
                            },
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log("Status updated:", data);

                            // Update teks label berdasarkan status baru
                            if (this.checked) {
                                statusLabel.textContent = "Dibaca";
                            } else {
                                statusLabel.textContent = "Belum Dibaca";
                            }
                        })
                        .catch(error => console.error("Error:", error));
                });
            });
        });
    </script>
@endsection
