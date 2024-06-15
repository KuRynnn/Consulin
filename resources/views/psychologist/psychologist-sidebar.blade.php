<!-- SIDEBAR -->
<div class="header-logo">
    <img src="" alt="" style="height: 36px;">
    <h1 class="ms-2 mt-2">Consulin</h1>
</div>

<div class="menu">
    <div class="menu-header">
        <h5>DASHBOARD</h5>
    </div>
    <div class="submenu">
        <a href="{{ route('psychologist-dashboard') }}" class="submenu-link">
            <span class="material-symbols-outlined">Home</span>
            Home
        </a>
        <a href="{{ route('psychologist-availability') }}" class="submenu-link mt-2">
            <span class="material-symbols-outlined">event_available</span>
            Set Availability
        </a>
    </div>
</div>
<div class="menu">
    <div class="menu-header">
        <h5>PATIENTS</h5>
    </div>
    <div class="submenu">
        <a href="{{ route('mypatients') }}" class="submenu-link">
            <span class="material-symbols-outlined">group</span>
            My Patients
        </a>
    </div>
</div>
<div class="menu">
    <div class="menu-header">
        <h5>ACCOUNTS</h5>
    </div>
    <div class="submenu">
        <a href="{{ route('psychologist-profile') }}" class="submenu-link">
            <span class="material-symbols-outlined">work</span>
            Profile
        </a>
    </div>
</div>
<div class="logout">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn-logout">
            <span class="material-symbols-outlined">logout</span>
            Log Out
        </button>
    </form>
</div>
