@extends('layouts.backend.app')
@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Detail Contact Us</h4>
                        </div>
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-4">First Name</dt>
                                <dd class="col-sm-8">{{ $datacontact->first_name }}</dd>

                                <dt class="col-sm-4">Last Name</dt>
                                <dd class="col-sm-8">{{ $datacontact->last_name }}</dd>

                                <dt class="col-sm-4">Subject</dt>
                                <dd class="col-sm-8">{{ $datacontact->subject }}</dd>

                                <dt class="col-sm-4">Description</dt>
                                <dd class="col-sm-8">{{ $datacontact->description }}</dd>
                            </dl>

                            <a href="/admin/contact" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
