<nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarTop">
  <div class="navbar-logo">

    <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
    <a class="navbar-brand me-1 me-sm-3" href="{{ route('psychologist-dashboard') }}">
      <div class="d-flex align-items-center">
        <div class="d-flex align-items-center"><img src="{{ asset('assets/img/heru_wolfcut.png') }}" alt="logo" width="27" />
          <p class="logo-text ms-2 d-none d-sm-block">{{ env('APP_NAME') }}</p>
        </div>
      </div>
    </a>
  </div>
  <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
    <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
      {{-- Dashboard --}}
      <li class="nav-item">
        <a class="nav-link lh-1 @if(Request::routeIs('psychologist-dashboard')) bg-primary-100 text-primary @endif" href="{{ route('psychologist-dashboard') }}"><span class="uil fs-0 me-2 uil-chart-pie"></span>Dashboard</a>
      </li>

      <li class="nav-item">
        <a class="nav-link lh-1 @if(Request::routeIs('mypatients')) bg-primary-100 text-primary @endif" href="{{ route('mypatients') }}"><span class="uil fs-0 me-2 uil-users-alt"></span>Pasien</a>
      </li>

      <li class="nav-item">
        <a class="nav-link lh-1 @if(Request::routeIs('psychologist-availability')) bg-primary-100 text-primary @endif" href="{{ route('psychologist-availability') }}"><span class="uil fs-0 me-2 uil-notes"></span>Ketersediaan</a>
      </li>

      <li class="nav-item">
        <a class="nav-link lh-1 @if(Request::routeIs('chat')) bg-primary-100 text-primary @endif" href="{{ route('chat') }}"><span class="uil fs-0 me-2 uil-comment-alt"></span>Chat</a>
      </li>
    </ul>
  </div>
  <ul class="navbar-nav navbar-nav-icons flex-row">
    <li class="nav-item">
      <div class="theme-control-toggle fa-icon-wait px-2">
        <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" />
        <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label>
        <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label>
      </div>
    </li>
    <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
        <div class="avatar avatar-l ">
          <img class="rounded-circle " src="{{ asset('assets/img/team/avatar.webp') }}" alt="" />

        </div>
      </a>
      <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
        <div class="card position-relative border-0">
          <div class="card-body p-0">
            <div class="text-center pt-4 pb-3">
              <div class="avatar avatar-xl ">
                <img class="rounded-circle " src="{{ asset('assets/img/team/avatar.webp') }}" alt="" />

              </div>
              <h6 class="mt-2 text-black">{{ auth()->guard('web')->user()->name }}</h6>
            </div>
          </div>
          <div>
            <ul class="nav d-flex flex-column mb-2 pb-1">
              <li class="nav-item"><a class="nav-link px-3" href="{{ route('psychologist-profile') }}"> <span class="me-2 text-900" data-feather="user"></span><span>Profile</span></a></li>
            </ul>
            <div class="px-3 pb-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!" onclick="document.querySelector('#logoutForm').submit()"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
            <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </div>
      </div>
    </li>
  </ul>
</nav>