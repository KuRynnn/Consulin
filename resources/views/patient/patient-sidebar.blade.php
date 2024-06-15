<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark sidebar">
    <a href="{{ route('patient-dashboard') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Consulin</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('patient-dashboard') }}" class="nav-link text-white {{ request()->routeIs('patient-dashboard') ? 'active' : '' }}" aria-current="page">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="bootstrap-icons.svg#heart-fill"/></svg>
                Home
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.psychologist.index') }}" class="nav-link text-white {{ request()->routeIs('user.psychologist.index') ? 'active' : '' }}" aria-current="page">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="bootstrap-icons.svg#heart-fill"/></svg>
                Psychologists
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('detection.index') }}" class="nav-link text-white {{ request()->routeIs('detection.index') ? 'active' : '' }}" aria-current="page">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="bootstrap-icons.svg#heart-fill"/></svg>
                Detection
            </a>
        </li>
        <li>
            <a href="{{ route('chat') }}" class="nav-link text-white {{ request()->routeIs('chat') ? 'active' : '' }}">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                Chatroom
            </a>
        </li>
        {{-- <li>
            <a href="{{ route('patient-appointment') }}" class="nav-link text-white {{ request()->routeIs('patient-appointment') ? 'active' : '' }}">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                Appointment
            </a>
        </li>
        <li>
            <a href="{{ route('patient-chatbot') }}" class="nav-link text-white {{ request()->routeIs('patient-chatbot') ? 'active' : '' }}">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                Bot
            </a>
        </li> --}}
    </ul>
    <hr>
    <div class="dropdown">
    @auth
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('assets\img\template_consulin.png') }}" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>{{ Auth::user()->name }}</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" style="">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item">Sign out</button>
                </form>
            </li>
        </ul>
    @else
        <a href="{{ route('login') }}" class="text-white text-decoration-none">Login</a>
    @endif
    </div>
</div>
