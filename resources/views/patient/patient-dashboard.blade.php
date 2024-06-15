@extends('patient.patient-generics')
@section('content')
<h1>INI DASHBOARD USER</h1>
<!-- Logout Form -->
<div class="col">
    <!-- First vertical section -->
    <div class="row-md-1">
        <div class="section d-flex justify-content-between align-items-center" style="height: calc((100vh - 96px) / 9);">
            <div class="card"  style="max-height: 4rem; margin-left: 10px">
                <div class="card-body d-flex align-items-center" style="padding: 5px; padding-right:15px">
                    <img src="https://static.vecteezy.com/system/resources/thumbnails/002/318/271/small_2x/user-profile-icon-free-vector.jpg" class="img-fluid mr-2" alt="Profile Picture" style="width: 50px; height: 50px;">
                    <div>
                        <h5 class="card-title mb-0">
                            @auth
                                {{auth()->user()->name}}
                            @endauth
                        </h5>
                        <p class="card-text mb-0" style="font-size:13px">Pasien</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Second vertical section -->
    <div class="row-md-1">
        <div class="row">
            <div class="col-5">
                <div class="section d-flex align-items-center"style="min-height: 17rem;">
                    <!-- Teks Welcome -->
                    <div>
                        <h2 style="padding-top: 100px; padding-left: 25px">Welcome User!</h2>
                    </div>
                    <!-- Gambar -->
                    <div class="ml-auto">
                        <img src="https://media.istockphoto.com/id/1133905340/vector/greeting-sign-hello-symbol.jpg?s=612x612&w=0&k=20&c=bRlrvDdp2EAW3bi3f6wEMdVQs_G3_eZn3ZrwtfQQ6pw=" style="width: 250px; height: 250px;">
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="section"style="min-height: 17rem;">
                    <h3 style="padding-top: 5px; padding-left: 10px">Appointment Anda</h3>
                    <div class="row" style="padding-left: 15px; padding-right: 15px;">
                        <!-- Card Appointment 1 -->
                        <div class="col-md-6">
                            <div class="card text-bg-light mb-3" style="margin-top: 15px">
                                <div class="card-header">Today's Appointment</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-1">
                                            <p>o</p>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <h5 class="card-title">Konsultasi</h5>
                                                <div class="col-6">
                                                    <p class="card-text" style="font-size:15px">Time</p>
                                                    <p style="font-size:12px; margin-top:-13px;">08:30 - 10:30</p>
                                                </div>    
                                                <div class="col">
                                                    <p class="card-text" style="font-size:15px">Konsultan</p>
                                                    <p style="font-size:12px; margin-top:-13px;">Dr. Mohamad Irpan Sp. P.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card Appointment 2 -->
                        <div class="col-md-6">
                            <div class="card text-bg-light mb-3" style="margin-top: 15px">
                                <div class="card-header">Appointment on May 3rd</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-1">
                                            <p>o</p>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <h5 class="card-title">Konsultasi</h5>
                                                <div class="col-6">
                                                    <p class="card-text" style="font-size:15px">Time</p>
                                                    <p style="font-size:12px; margin-top:-13px;">21:30 - 22:30</p>
                                                </div>    
                                                <div class="col">
                                                    <p class="card-text" style="font-size:15px">Konsultan</p>
                                                    <p style="font-size:12px; margin-top:-13px;">Dr. Peepee Poopoo</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Third vertical section -->
    <div class="row-md-1">
        <div class="section">
            <h2 style="padding-top:20px; padding-left:20px">Section 3</h2>
            <p style="padding-left:20px; max-width:55rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
</div>
@endsection
