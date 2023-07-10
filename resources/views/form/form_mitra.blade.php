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

    <main class="container mt-3" style="height: 1000px">
      <div class="py-5">
        <div class="d-flex align-items-center mb-2">
          <div
            style="width: 15px; height: 30px"
            class="bg-primary d-inline-block me-3 rounded"
          ></div>
          <span class="text-primary fw-bold">Edit Detail Bisnis</span>
        </div>
        <br /><br />
        <form class="row g-3">
          <div class="col-md-6">
            <label for="namaBisnis" class="form-label">Nama Bisnis</label>
            <input type="text" class="form-control" id="namaBisnis" />
          </div>
          <div class="col-md-6">
            <label for="tahunAwal" class="form-label"
              >Tahun Awal Bisnis Berjalan</label
            >
            <input
              type="text"
              class="form-control"
              id="tahunAwal"
              placeholder="DD/Month/YY"
            
            />
          </div>
          <div class="col-md-6">
            <label for="usernameIG" class="form-label"
              >Username Instagram</label
            >
            <input type="text" class="form-control" id="usernameIG" />
          </div>
          <div class="col-md-6">
            <label for="jumlahOutlet" class="form-label">Jumlah Outlet</label>
            <input
              type="number"
              class="form-control"
              id="jumlahOutlet"
            
            />
          </div>
          <div class="col-md-6">
            <label for="namaPJBisnis" class="form-label"
              >Nama Penanggung Jawab Bisnis</label
            >
            <input
              type="text"
              class="form-control"
              id="namaPJBisnis"
            
            />
          </div>
          <div class="col-md-6">
            <label for="areaJangkauan" class="form-label"
              >Area Jangkauan Outlet</label
            >
            <input
              type="text"
              class="form-control"
              id="areaJangkauan"
              placeholder="Kalimantan, Jawa, Sumatera, dll."
            
            />
          </div>
          <div class="col-md-6">
            <label for="kontakPJBisnis" class="form-label"
              >Kontak Penanggung Jawab Bisnis</label
            >
            <input
              type="text"
              class="form-control"
              id="kontakPJBisnis"
            
            />
          </div>
          <div class="col-md-6">
            <label for="rataRataKotor" class="form-label"
              >Rata-rata penghasilan kotor bisnis per-bulan</label
            >
            <input
              type="text"
              class="form-control"
              id="rataRataKotor"
            
            />
          </div>
          <div class="col-md-6">
            <label for="emailBisnis" class="form-label">Email Bisnis</label>
            <input
              type="email"
              class="form-control"
              id="emailBisnis"
            
            />
          </div>
          <div class="col-md-6">
            <label for="rataRataBersih" class="form-label"
              >Rata-rata penghasilan bersih bisnis per-bulan</label
            >
            <input
              type="text"
              class="form-control"
              id="rataRataBersih"
            
            />
          </div>
          <div class="col-md-6">
            <label for="kategoriBisnis" class="form-label"
              >Kategori Bisnis</label
            >
            <select
              class="form-select"
              aria-label="Default select example"
            
            >
              <option selected>-</option>
              <option value="1">Food & Beverages</option>
              <option value="2">Fashion</option>
              <option value="3">Elektronik</option>
              <option value="4">Kesehatan</option>
              <option value="5">Kecantikan</option>
              <option value="6">Olahraga</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="kontrak" class="form-label">Kontrak</label>
            <input
              type="file"
              class="form-control"
              id="kontrak"
            
              accept=".pdf"
              placeholder="PDF"
            />
          </div>
          <div class="col-12">
            <input
              type="checkbox"
              class="form-check-input"
              id="exampleCheck1"
            
            />
          </div>
          <div class="col-12">
            <a href="{{url('/mitra_confirm')}}"><button type="button" class="btn btn-primary">Edit</button></a>
            <a href="{{url('/')}}"><button type="button" class="btn btn-outline-dark">Batal</button></a>
          </div>
        </form>
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
