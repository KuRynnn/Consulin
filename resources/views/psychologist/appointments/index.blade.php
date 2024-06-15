@extends('layouts.app')

@section('title', 'My Patient')
@section('content')
<div class="d-flex mb-5" id="scrollspyStats"><span class="fa-stack ms-n1 me-2"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fa-inverse fa-stack-1x text-primary-soft fas fa-percentage"></i></span>
  <div class="col">
      <h3 class="text-primary position-relative fw-bold mb-0"><span class="bg-soft pe-2">My Patients</span><span class="border-primary-200 position-absolute top-50 translate-middle-y w-100 z-index--1 start-0 border"></span></h3>
  </div>
</div>

<div class="card mb-5">
  <div class="card-body">
    <h5 class="card-title">Scheduled Appointments</h5>
    <div class="row my-5">
      <div class="col-md-11">
      </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Date</th>
          <th>Time</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($scheduledAppointments as $key => $value)
          <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $value->patient->user->name }}</td>
            <td>{{ $value->patient->user->email }}</td>
            <td>{{ $value->patient->phone }}</td>
            <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $value->date)->locale('ID')->format('j F Y') }}</td>
            <td>{{ substr($value->start_time, 0, 5) }} - {{ substr($value->end_time, 0, 5) }}</td>
            <td>
              <a type="button" class="btn btn-primary" href="{{ route('mypatients.show', $value->id) }}">Detail</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Appointment Histories</h5>
    <div class="row my-5">
      <div class="col-md-11">
      </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Date</th>
          <th>Time</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($finishedAppointments as $key => $value)
          <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $value->patient->user->name }}</td>
            <td>{{ $value->patient->user->email }}</td>
            <td>{{ $value->patient->phone }}</td>
            <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $value->date)->locale('ID')->format('j F Y') }}</td>
            <td>{{ substr($value->start_time, 0, 5) }} - {{ substr($value->end_time, 0, 5) }}</td>
            <td>
              <a type="button" class="btn btn-primary" href="{{ route('mypatients.show', $value->id) }}">Detail</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection  