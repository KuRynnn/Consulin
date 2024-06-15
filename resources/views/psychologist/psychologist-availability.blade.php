@extends('layouts.app')

@section('title', 'Ketersediaan')

@section('content')
    <div class="card" style="max-height: 4rem; margin-left: 10px">
        <div class="card-body d-flex align-items-center" style="padding: 5px; padding-right:15px">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/002/318/271/small_2x/user-profile-icon-free-vector.jpg" class="img-fluid mr-2" alt="Profile Picture" style="width: 50px; height: 50px;">
            <div>
                <h5 class="card-title mb-0">
                    @auth
                        {{ auth()->user()->name }}
                    @endauth
                </h5>
                <p class="card-text mb-0" style="font-size:13px">Doctor</p>
            </div>
        </div>
    </div>
    <div class="card mt-3" style="margin-left: 10px">
        <div class="card-header">
            <h3 class="card-title">Set Availability</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('psychologist-availability.store') }}" method="POST">
                @csrf
                <div class="col-md-3 mb-3">
                    <label for="startDate" class="form-label">Pick Date</label>
                    <input class="form-control datetimepicker" name="dateAvailable" type="text" placeholder="dd/mm/yyyy" data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' />
                </div>
                <div class="col-md-12 mb-3">
                    <div class="col-md-3 mb-2">
                        <label for="startDate" class="form-label">Start Time</label>
                        <input class="form-control datetimepicker" name="startTime" type="text" placeholder="hour : minute" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}' />
                    </div>
                    <div class="col-md-3">
                        <label for="startDate" class="form-label">End Time</label>
                        <input class="form-control datetimepicker" name="endTime" type="text" placeholder="hour : minute" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}' />
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>

            </form>
        </div>

        <div class="card-header">
            <h3 class="card-title">Availables</h3>
        </div>
        <div class="card-body">
            <table class="table-striped table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($availables as $key => $value)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $value->date }}</td>
                            <td>{{ substr($value->start_time, 0, 5) }}-{{ substr($value->end_time, 0, 5) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            </form>
        </div>

        <div class="card-header">
            <h3 class="card-title">Your Appointments</h3>
        </div>
        <div class="card-body">
            <table class="table-striped table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Patient</th>
                        <th scope="col">Time</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>10:00-12:00</td>
                        <td><a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Request Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>10:00-12:00</td>
                        <td><a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Request Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>10:00-12:00</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Request Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>

            </form>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endpush
