<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Amang UMKM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
</head>

<body>

    <body>
        @include('partials._header')

        <main class="container mt-3">
            <div class="py-5">
              <div class="container">
                <div class="row">
                  <div class="col"></div>
                  <div class="col">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title text-center mb-3">Profil</h4>
                        <div class="text-center">
                          <img src="https://i.postimg.cc/PrcNMT3n/Group-2.png" class="rounded" alt="..." width="180px" height="180px"/>
                        </div>
                        <br />
                        <div class="text-center">
                          <b class="d-inline">Nama:</b>
                          <p class="d-inline">Muhammad Fulan</p>
                        </div>
                        <br />
                        <div class="text-center">
                          <b class="d-inline">Email:</b>
                          <p class="d-inline">fulan123@gmail.com</p>
                        </div>
                        <br />
                        <div class="text-center">
                            <a href="{{url('/edit_profile')}}" class="btn btn-dark">Edit Profil</a>
                          <a href="#" class="btn btn-dark">Edit Detail Bisnis</a>
                        </div>
                        <br />
                        <div class="d-grid gap-2 col-8 mx-auto">
                          <a href="#" class="btn btn-danger">Log out</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col"></div>
                </div>
              </div>
            </div>
          </main>

        @include('partials._footer')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    </body>

</html>