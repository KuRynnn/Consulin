@extends('patient.patient-generics')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Doctor Details</h5>
        <div class="row">
            <div class="card col" style="margin: 10px;">
                <div class="card-body d-flex align-items-center" style="padding: 5px; padding-right:15px">
                    <img src="https://static.vecteezy.com/system/resources/thumbnails/002/318/271/small_2x/user-profile-icon-free-vector.jpg" class="img-fluid mr-2" alt="Profile Picture" style="width: 150px; height: 150px;">
                    <div>
                        <h2 class="card-title " style="margin-bottom: 10px">Dr. Moh. Irpan Sp. P.</h2>
                        <p class="card-text mb-0" style="font-size:25px"> Psychologist</p>
                    </div>
                </div>
                <h5 class="card-title " style="margin-bottom: 10px;padding-left:15px;">Doctor Desc</h5>
                <p style="padding:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div style="border-top: 1px solid #ccc; margin-top: 20px;margin-bottom: 20px;"></div>
                <h6 style="padding:15px;">Pilih Tanggal dan Waktu Konsultasi</h6> 
                <div class="row" style="padding:15px;">
                    <div class="col">
                        <div class="btn btn-outline-secondary active" style="width: 100px;">
                            <p style="margin:0px;">Hari ini</p>
                            <p style="margin:0px;">27</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="btn btn-outline-secondary" style="width: 100px;">
                            <p style="margin:0px;">Senin</p>
                            <p style="margin:0px;">28</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="btn btn-outline-secondary" style="width: 100px;">
                            <p style="margin:0px;">Selasa</p>
                            <p style="margin:0px;">29</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="btn btn-outline-secondary" style="width: 100px;">
                            <p style="margin:0px;">Rabu</p>
                            <p style="margin:0px;">30</p>
                        </div>
                    </div>
                </div>
                <div class="card" style="margin:10px;margin-bottom:20px;">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col"><input type="checkbox">
                                    <label for="vehicle1"> 06:00 - 07:00</label><br>
                                    <input type="checkbox">
                                    <label for="vehicle1"> 07:00 - 08:00</label><br>
                                    <input type="checkbox">
                                    <label for="vehicle1"> 08:00 - 09:00</label><br>
                                </div>
                                <div class="col"> <input type="checkbox">
                                    <label for="vehicle1"> 11:00 - 12:00</label><br>
                                    <input type="checkbox">
                                    <label for="vehicle1"> 12:00 - 13:00</label><br>
                                    <input type="checkbox">
                                    <label for="vehicle1"> 13:00 - 14:00</label><br>
                                </div>
                                <div class="col-3">
                                    <input class="btn btn-secondary" type="submit" value="Submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col" style="margin: 10px;">
                <h3 style="padding:35px;">Detil Pembayaran</h3> 
                <div style="border-top: 1px solid #ccc; margin-top: 20px;margin-bottom: 20px;"></div>
                <div class="row">
                    <div class="col">
                        <p style="padding:5px;">Konsultan </p>
                        <p style="padding:5px;">Waktu Konsultasi </p>
                        <p style="padding:5px;">Konsultasi </p>
                        <p style="padding:5px;">Pajak </p>
                        <p style="padding:5px;">Biaya Admin </p>
                        <p style="padding:5px;">Biaya Platform </p>
                    </div>
                    <div class="col" style="text-align:right">
                        <p style="padding:5px;">Dr. Moh. Irpan Sp. P.</p>
                        <p style="padding:5px;"> 07:00 - 08:00</p>
                        <p style="padding:5px;">Rp 55.000,00</p>
                        <p style="padding:5px;">Rp 5.000,00</p>
                        <p style="padding:5px;">Rp 5.000,00</p>
                        <p style="padding:5px;">Rp 5.000,00</p>
                    </div>
                </div>
                <div style="border-top: 1px solid #ccc; margin-top: 20px;margin-bottom: 20px;"></div>
                <div class="row">
                    <div class="col">
                        <h5 class="card-title " style="margin-bottom: 10px;padding-left:15px;">Total Pembayaran</h5>
                    </div>
                    <div class="col" style="text-align:right">
                        <h5 style="padding:5px;">Rp 70.000,00</h5>
                    </div>
                </div>
                <div style="border-top: 1px solid #ccc; margin-top: 20px;margin-bottom: 20px;"></div>
                <center>
                <input class="btn btn-secondary" type="submit" value="Make Appointment/Pay">
                <center>
            </div>
        </div>
    </div>
</div>
@endsection  