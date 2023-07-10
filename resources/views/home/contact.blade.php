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

    <main class="container mt-3">
      <div class="py-5">
        <div class="py-5">
          <div class="row">
            <div class="col-lg-4">
              <div class="d-flex">
                <img
                  height="40"
                  width="40"
                  src="https://i.postimg.cc/85vTvhML/call.jpg"
                  alt=""
                  class="me-3"
                />
                <h2>Call kami</h2>
              </div>
              <br />
              <h6>Kami tersedia 24 jam, Setiap hari.</h6>
              <h6>Nomor Telepon: +6281549351406</h6>
              <hr />
              <br />
              <div class="d-flex">
                <img
                  height="40"
                  width="40"
                  src="https://i.postimg.cc/QCrhJHJw/mail.jpg"
                  alt=""
                  class="me-3"
                />
                <h2>Email kami</h2>
              </div>
              <br />
              <h6>
                Isi form dan kami akan mengkontak kamu dalam waktu kurang dari
                24 jam.
              </h6>
              <h6>Email: amangumkm@gmail.com</h6>
            </div>
            <div class="col-lg-8">
              <br />
              <form action="">
                <div class="row">
                  <div class="col-md-4">
                    <label for="namaContact" class="form-label">Nama</label>
                    <input
                      type="text"
                      class="form-control"
                      id="namaContact"
                      required
                    />
                  </div>
                  <div class="col-md-4">
                    <label for="emailContact" class="form-label">Email</label>
                    <input
                      type="text"
                      class="form-control"
                      id="emailContact"
                      required
                    />
                  </div>
                  <div class="col-md-4">
                    <label for="nomorTelepon" class="form-label"
                      >No. Telepon</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="nomorTelepon"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <br />
                    <label for="pesan" class="form-label"
                      >Pesan yang ingin disampaikan:</label
                    >
                    <textarea
                      class="form-control"
                      id="pesan"
                      rows="6"
                      required
                    ></textarea>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary">
                      Kirim Pesan
                    </button>
                  </div>
                </div>
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
