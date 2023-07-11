<style>
  .dropdown-menu {
    left: 50% !important;
    transform: translateX(-50%) !important;
  }

  .dropdown-toggle::after {
    display: none;
  }
</style>
<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}"><img style="width: max-content; height: 40px;"
          src="https://i.postimg.cc/nhmTCVyV/Logo-UMKM-4-1.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('home') }}" style="font-weight: bold;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}" style="font-weight: bold;">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}" style="font-weight: bold;">About</a>
          </li>
        </ul>

        @auth
          @if (auth()->user()->role_id == 3)
            <a href="{{ route('daftar-mitra') }}" class="btn btn-sm btn-outline-warning me-3">Gabung Merchant</a>
          @endif
          <div class="dropdown">
            <a class="dropdown-toggle" href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://i.postimg.cc/rsg2HPm6/Group-1.png"></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('profile') }}">Profil</a></li>
              <li><a class="dropdown-item" href="{{ route('panel.dashboard') }}">Dashboard Mitra</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <form action="{{ route('logout') }}" method="post" class="dropdown-item">
                  @csrf
                  <button type="submit" class="btn text-danger">Logout</button>
                </form>
              </li>
            </ul>
          </div>
        @endauth

        @guest
          <div>
            <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Login</a>
            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
          </div>
        @endguest
      </div>
    </div>
  </nav>
</header>
