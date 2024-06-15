@extends('patient.patient-generics')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Psychologists</h5>
            @foreach ($doctors as $doctor)
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{ asset('assets\img\template_consulin.png') }}" alt="Profile Picture" class="img-fluid custom-image">
                        </div>
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <p><a href="{{ route('user.psychologist.show', $doctor->id) }}">Name: {{ $doctor->user->name }}</a></p>
                                    <p>Email: {{ $doctor->user->email }}</p>
                                    <p>Spesialisasi: -</p>
                                    <p>Jurusan: -</p>
                                    <p>Pengalaman: -</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 justify-content-end">
                            <div>
                                <p>Available Appointment:</p>
                                <ul>
                                    @forelse ($doctor->availabilities as $available)
                                    <li>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $available->date)->locale('id')->format('j F Y') }} {{ substr($available->start_time, 0, 5) }} - {{ substr($available->end_time, 0, 5) }}</li>
                                    @empty
                                        -
                                    @endforelse
                                </ul>

                            </div>
                            <div class="d-flex flex-column">
                                <a href="{{ route('user.psychologist.show', $doctor->id) }}" type="button" class="btn btn-primary mt-auto">Booking Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
