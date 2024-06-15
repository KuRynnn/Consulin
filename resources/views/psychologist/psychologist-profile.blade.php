@extends('layouts.app')

@section('title', 'Profile')
@section('content')
<div class="d-flex mb-5" id="scrollspyStats"><span class="fa-stack ms-n1 me-2"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fa-inverse fa-stack-1x text-primary-soft fas fa-percentage"></i></span>
  <div class="col">
      <h3 class="text-primary position-relative fw-bold mb-0"><span class="bg-soft pe-2">THIS IS PROFILE PAGE</span><span class="border-primary-200 position-absolute top-50 translate-middle-y w-100 z-index--1 start-0 border"></span></h3>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Admin Information</h3>
  </div>
  <div class="card-body">
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    {{-- <p><strong>Date of Birth:</strong> 01/01/1990</p>
    <p><strong>Medical Conditions:</strong></p>
    <ul>
      <li>Cardiovascular Intervention <i class="fas fa-check text-success"></i></li>
      <li>Congestive Heart Failure <i class="fas fa-exclamation-triangle text-danger"></i></li>
      <li>Hypertension</li>
      <li>Diabetes</li>
      <li>Smoking</li>
    </ul> --}}
  </div>
</div>
@endsection  