@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title container">Patient {{ $appointment->patient->user->name }}</h5>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{ asset('assets\img\template_consulin.png') }}" alt="Profile Picture" class="img-fluid custom-image" width="100%" height="auto">
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-10">
                                <p>Name: {{ $appointment->patient->user->name }}</p>
                                <p>Email: {{ $appointment->patient->user->email }}</p>
                                <p>Phone: {{ $appointment->patient->phone_number }}</p>
                                <p>Tanggal Lahir: {{ $appointment->patient->birth_date }}</p>
                                <p>Berat Badan: {{ $appointment->patient->weight }}</p>
                                <p>Tinggi Badan: {{ $appointment->patient->height }}</p>
                                <p>Insuransi: {{ $appointment->patient->insurance }}</p>
                                <p>Appointment:
                                    <span class="text-success" style="font-weight: bold;">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $appointment->date)->locale('ID')->format('j F Y') }} {{ substr($appointment->start_time, 0, 5) }} - {{ substr($appointment->end_time, 0, 5) }}</span>
                                </p>
                                @if ($appointment->status == 'completed')
                                    <p>Status:
                                        <span class="text-success" style="font-weight: bold;">Completed</span>
                                    </p>
                                    <p>Note: {{ $appointment->note }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my-3">
                    <h5 class="mb-3">Patient Anxiety Text</h5>
                    @foreach ($questions as $key => $question)
                        <div class="row">
                            <div class="col-md-1">
                                <p>{{ ++$key }}.</p>
                            </div>
                            <div class="col-md-11">
                                <p class="mb-1">{{ $question->question }}</label>
                                <p>Jawaban: {{ isset($question->questionAnswers) && count($question->questionAnswers) > 0 ? $question->questionAnswers[0]->answer : '-' }}</p>

                                <p>Kemungkinan Anxiety:
                                    @if (isset($question->questionAnswers) && count($question->questionAnswers) > 0)
                                        @php $anxietyResult = substr($question->questionAnswers[0]->score * 100, 0, 5); @endphp
                                        {{ $anxietyResult }}%
                                        <span>(
                                            @if ($anxietyResult >= 75)
                                                Tinggi
                                            @elseif ($anxietyResult >= 50)
                                                Lumayan Tinggi
                                            @elseif ($anxietyResult >= 25)
                                                Lumayan Rendah
                                            @else
                                                Rendah
                                            @endif
                                            )
                                        </span>
                                    @else
                                        -
                                    @endif
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

                @if ($appointment->status != 'completed')
                    <div class="mb-4">
                        <div class="d-flex flex-column">
                            <button type="button" class="btn btn-outline-success mt-auto" disabled>Sudah Dibayar</button>
                        </div>
                    </div>
                    <div>
                        <form action="{{ route('mypatients.set-complete', $appointment->id) }}" method="POST">
                            @csrf
                            <label for="">Note :</label>
                            <textarea name="note" rows="10" style="width:100%;" class="form-control" placeholder="Write your note">{{ $appointment->note }}</textarea>
                            <div class="d-flex flex-column mt-2">
                                <button type="submit" class="btn btn-success mt-auto">Finish This Appointment</button>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
    </div>
@endsection
