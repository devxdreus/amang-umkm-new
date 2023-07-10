<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Amang UMKM</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
  </head>
  <body>
    @include('partials._header')

    <main class="container mt-3" style="min-height: 100vh">
      <div class="py-5">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8">
                      <h1>Detail Paket</h1>
                      <br />
                      <img class="justify-content-center mb-4" width="89%" height="30%" src="https://i.postimg.cc/X7vvtzhx/image-68.png" alt="" />
                      <div class="card text-dark bg-light mb-3" style="max-width: 40rem">
                          <div class="card-body">
                              <h5 class="card-title">Yang Didapat:</h5>
                              <p class="card-text">
                                  1. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                  <br /> 2. Corrupti earum, magni alias totam praesentium vel rem
                                  <br /> eligendi ad enim officiis tempora itaque reprehenderit.
                                  <br /> 3. Dignissimos non nisi velit, mollitia consequuntur consectetur.
                              </p>
                          </div>
                      </div>
                      <br />
                      <h2>Detail Kontrak</h2>
                      <embed width="80%" height="300" src="surat.pdf" type="" />
                  </div>
                  <div class="col-lg-4">
                      <h1>Data Franchisee</h1>
                      <hr />

                      <form>
                          <div class="mb-3">
                              <label for="noTelepon" class="form-label">Nomor Telepon</label
                >
                <input
                  type="text"
                  id="noTelepon"
                  class="form-control"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                              <input type="email" id="email" class="form-control" required />
                          </div>
                          <div class="mb-3">
                              <label for="alamat" class="form-label">Alamat</label>
                              <input type="text" id="alamat" class="form-control" required />
                              <div class="invalid-feedback">Please choose a username.</div>
                          </div>
                          <br />
                          <h3>Pembayaran</h3>
                          <hr />

                          <ul class="list-group">
                              <li class="list-group-item d-flex justify-content-between">
                                  <h6 class="my-0">Nama Franchise:</h6>
                                  <div class="text-muted">Kkuldak</div>
                              </li>
                              <li class="list-group-item d-flex justify-content-between">
                                  <h6 class="my-0">Harga:</h6>
                                  <div class="text-muted">Rp9.000.000</div>
                              </li>
                          </ul>
                          <br />
                          <h5>Bank:</h5>
                          <img class="img-fluid" src="https://i.postimg.cc/m2rj4yZs/bank.png" alt="" />
                          <div class="mb-3">
                              <label for="namaCC" class="form-label">Nama Bank</label
                >
                <input
                  type="text"
                  id="namaCC"
                  class="form-control"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="noCC" class="form-label">Nomor Credit Card</label>
                              <input type="text" id="noCC" class="form-control" required />
                          </div>
                          <a href="{{url('/checkout_confirm')}}"><button type="button" class="btn btn-primary">Checkout</button></a>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </main>

    @include('partials._footer')

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
      integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
