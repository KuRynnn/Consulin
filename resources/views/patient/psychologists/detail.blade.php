@extends('patient.patient-generics')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Psychologist {{ $doctor->user->name }}</h5>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{ asset('assets\img\template_consulin.png') }}" alt="Profile Picture" class="img-fluid custom-image">
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-6">
                                <p>Name: {{ $doctor->user->name }}</p>
                                <p>Email: {{ $doctor->user->email }}</p>
                                <p>Spesialisasi: {{ $doctor->specialization }}</p>
                                <p>Jurusan: {{ $doctor->field_of_practice }}</p>
                                <p>Pengalaman: {{ $doctor->years_of_experience }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    @if (empty($scheduledAppointment))
                        <form action="{{ route('user.psychologist.store', $doctor->id) }}" method="POST">
                            <div class="mb-3">
                                <p>Available Appointment:</p>
                                @csrf
                                @forelse ($doctor->availabilities as $available)
                                    <div class="form-group">
                                        <input id="appointment{{ $available->id }}" type="radio" name="appointment" value="{{ $available->id }}" required>
                                        <span class="mx-1"></span>
                                        <label for="appointment{{ $available->id }}">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $available->date)->locale('ID')->format('j F Y') }} {{ substr($available->start_time, 0, 5) }} - {{ substr($available->end_time, 0, 5) }}</label>
                                    </div>
                                @empty
                                    -
                                @endforelse


                            </div>
                            <div class="d-flex flex-column">
                                <button type="submit" class="btn btn-success mt-auto">Pay Appointment</button>
                            </div>
                        </form>
                    @else
                        <p>Incoming Scheduled Appointment:
                            <span class="text-success" style="font-weight: bold;">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $scheduledAppointment->date)->locale('ID')->format('j F Y') }} {{ substr($scheduledAppointment->start_time, 0, 5) }} - {{ substr($scheduledAppointment->end_time, 0, 5) }}</span>
                        </p>
                        <div class="d-flex flex-column">
                            <button type="button" class="btn btn-outline-success mt-auto" disabled>Sudah Dibayar</button>
                        </div>
                    @endif
                </div>

                <div class="mt-4">
                    <h5>Completed Appointment History</h5>
                    
                    <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Note</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($finishedAppointments as $key => $value)
                            <tr>
                              <td>{{ $key + 1 }}</td>
                              <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $value->date)->locale('ID')->format('j F Y') }}</td>
                              <td>{{ substr($value->start_time, 0, 5) }} - {{ substr($value->end_time, 0, 5) }}</td>
                              <td>{{ $value->note }}</td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
