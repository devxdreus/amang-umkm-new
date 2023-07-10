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
              <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                  <button class="btn btn-outline-success" type="submit">
                          Search
                      </button>
              </form>
          </div>
      </div>
  </nav>
</header>

