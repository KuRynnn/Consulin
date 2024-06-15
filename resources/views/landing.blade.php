<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulin</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar p-3">
        <div class="logo">
        </div>

        @php
            use App\Constants\UserRole;
        @endphp

        <div class="nav-buttons">
            @if (auth()->check())
                @if (auth()->user()->role == UserRole::DOKTER)
                    <a href="{{ route('psychologist-dashboard') }}">
                        <button class="button login">Dashboard</button>
                    </a>
                @elseif (auth()->user()->role == UserRole::PASIEN)
                    <a href="{{ route('patient-dashboard') }}">
                        <button class="button login">Dashboard</button>
                    </a>
                @endif
            @else
                <a href="/register">
                    <button class="button register">Register</button>
                </a>
                <a href="/login">
                    <button class="button login">Log In</button>
                </a>
            @endif
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center contents">
            <div class="col-md-7 mt-5 pt-5">
                <div class="content-box">
                    <h1 class="fw-bold pt-4">AI Chat Mental Health Consultation</h1>
                    <h3 class="fw-semibold">AI powered consultation chatbot for first aid mental health problems</h3>
                    <p>First AI powered consultation chatbot for first aid mental health problems. That currently work in
                        Indonesia that provide some services such as ...</p>
                    <a href="/services" class="btn btn-primary">Services</a> <!-- Use Bootstrap button classes -->
                </div>
            </div>
            <!-- IMAGE -->
            <div class="col-md-5">
                <img src="" class="img-fluid faded faded-left" >
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
