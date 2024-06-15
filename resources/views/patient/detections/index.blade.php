@extends('patient.patient-generics')

@section('content')
    <div class="d-flex mb-5" id="scrollspyStats"><span class="fa-stack ms-n1 me-2"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fa-inverse fa-stack-1x text-primary-soft fas fa-percentage"></i></span>
        <div class="col">
            <h3 class="text-primary position-relative fw-bold mb-0"><span class="bg-soft pe-2">DETECTION DATA</span><span class="border-primary-200 position-absolute top-50 translate-middle-y w-100 z-index--1 start-0 border"></span></h3>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Detection</h5>
            <form action="{{ route('detection.store') }}" method="POST" class="form-inline">
                @csrf
                @foreach ($questions as $question)
                    <div class="row mb-1 mt-3">
                        <label class="mb-1">{{ $question->question }}</label>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" type="text" name="anxiety_text[{{ $question->id }}]" value="{{ isset($question->questionAnswers) && count($question->questionAnswers) > 0 ? $question->questionAnswers[0]->answer : '' }}" placeholder="Masukkan jawaban anda">
                            </div>
                            @error('anxiety_text[{{ $question->id }}]')
                                <p class="text-danger mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

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
                @endforeach

                <div>
                    <button class="btn btn-outline-success mt-5" type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>
@endsection
