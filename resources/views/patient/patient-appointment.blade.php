@extends('patient.patient-generics')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Patients Data</h5>
        <div class="row">
            <div class="col-md-11">
                <form class="form-inline">
                    <div class="form-group">
                        <input class="form-control" type="search" placeholder="Cari psikolog" aria-label="Search">
                    </div>
                </form>
            </div>
            <div class="col-md-1">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-2">
                    <img src="{{ asset('assets\img\template_consulin.png') }}" alt="Profile Picture" class="img-fluid custom-image">
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-6">
                            <a  href="{{ route('patient-make-appointment') }}">Name: John Doe</a>
                            <p>Email: john@example.com</p>
                            <p>Phone: +1234567890</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 d-flex flex-column justify-content-end">
                    <button type="button" class="btn btn-primary mt-auto">Chat</button>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-2">
                    <img src="{{ asset('assets\img\template_consulin.png') }}" alt="Profile Picture" class="img-fluid custom-image">
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Name: John Doe</p>
                            <p>Email: john@example.com</p>
                            <p>Phone: +1234567890</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 d-flex flex-column justify-content-end">
                    <button type="button" class="btn btn-primary mt-auto">Chat</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  