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
          <a class="navbar-brand" href="{{ url('/') }}"><img style="width: max-content; height: 40px;" src="https://i.postimg.cc/nhmTCVyV/Logo-UMKM-4-1.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ url('/') }}" style="font-weight: bold;">Home</a
                          >
                      </li>
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ url('profile') }}" style="font-weight: bold;">Profile</a
                          >
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ url('contact') }}" style="font-weight: bold;">Contact</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('about') }}" style="font-weight: bold;">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('signup') }}" style="font-weight: bold;">Sign Up</a>
                  </li>
              </ul>
              <div class="dropdown">
                <a class="dropdown-toggle" href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://i.postimg.cc/rsg2HPm6/Group-1.png"></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Profil</a></li>
                  <li><a class="dropdown-item" href="#">Dashboard Mitra</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#" style="color: red">Logout</a></li>
                </ul>
              </div>
          </div>
      </div>
  </nav>
</header>