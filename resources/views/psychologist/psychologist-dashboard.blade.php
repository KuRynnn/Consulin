@extends('layouts.app')

@section('title', 'Dashboard Dokter')

@section('content')
<div class="d-flex mb-5" id="scrollspyStats"><span class="fa-stack ms-n1 me-2"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fa-inverse fa-stack-1x text-primary-soft fas fa-percentage"></i></span>
  <div class="col">
      <h3 class="text-primary position-relative fw-bold mb-0"><span class="bg-soft pe-2">Dashboard Dokter</span><span class="border-primary-200 position-absolute top-50 translate-middle-y w-100 z-index--1 start-0 border"></span></h3>
  </div>
</div>

<div class="row mb-3">
  <div class="col-md-4">
      <div class="card">
          <h5 class="card-header">Account</h5>
          <div class="card-body d-flex align-items-center">
            <img src="{{ asset('assets\img\template_consulin.png') }}" class="img-fluid mr-2" alt="Profile Picture">
            <div>
              <h5 class="card-title">Welcome, "Name"</h5>
              <p class="card-text">You are logged in as doctor</p>
            </div>
        </div>
      </div>
  </div>
  <div class="col-md-8">
    <div class="card">
      <h5 class="card-header">Patients</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-md-4 d-flex align-items-start">
            <img src="{{ asset('assets\img\template_consulin.png') }}" class="img-fluid mr-2" alt="Assigned">
            <div class="d-flex flex-column">
                <h5 class="card-title mb-0">4</h5>
                <p class="card-text mt-auto">Assigned</p>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-start">
            <img src="{{ asset('assets\img\template_consulin.png') }}" class="img-fluid mr-2" alt="Normal">
            <div class="d-flex flex-column">
                <h5 class="card-title mb-0">3</h5>
                <p class="card-text mt-auto">Normal</p>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-start">
            <img src="{{ asset('assets\img\template_consulin.png') }}" class="img-fluid mr-2" alt="Male">
            <div class="d-flex flex-column">
                <h5 class="card-title mb-0">1</h5>
                <p class="card-text mt-auto">Male</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <div class="card">
      <h5 class="card-header">Diagnoses</h5>
      <div class="card-body">
        <div class="row">
          <div class="col d-flex align-items-start">
            <img src="{{ asset('assets\img\template_consulin.png') }}" class="img-fluid mr-2" alt="Assigned">
            <div class="d-flex flex-column">
                <h5 class="card-title mb-0">4</h5>
                <p class="card-text mt-auto">Assigned</p>
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <img src="{{ asset('assets\img\template_consulin.png') }}" class="img-fluid mr-2" alt="Assigned">
            <div class="d-flex flex-column">
                <h5 class="card-title mb-0">4</h5>
                <p class="card-text mt-auto">Assigned</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-8">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Latest Diagnoses</h5>
        <table class="table">
          <thead>
            <tr>
              <th>Updated</th>
              <th>Patient</th>
              <th>Diagnoses</th>
              <th>Verification</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>J3/22/2024, 1:14:30 PM</td>
              <td>Eugene Wehner</td>
              <td>Normal</td>
              <td>Verified</td>
              <td>Ini Logo</td>
            </tr>
            <tr>
              <td>2/28/2024, 2:29:29 PM</td>
              <td>Eugene Wehner</td>
              <td>Normal</td>
              <td>Verified</td>
              <td>Ini Logo</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection  