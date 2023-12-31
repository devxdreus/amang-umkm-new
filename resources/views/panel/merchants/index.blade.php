<x-layout.admin.master title="Detail Usaha">
  <div class="row">
    <form class="row g-3" action="{{ route('merchant.store') }}" method="post">
      @csrf
      <div class="col-md-6">
        <label for="namaBisnis" class="form-label">Nama Bisnis</label>
        <input type="text" class="form-control" id="namaBisnis" name="name" required />
      </div>
      <div class="col-md-6">
        <label for="tahunAwal" class="form-label">Tahun Awal Bisnis Berjalan</label>
        <input type="text" class="form-control" id="tahunAwal" name="birth" placeholder="DD/Month/YY" required />
      </div>
      <div class="col-md-6">
        <label for="usernameIG" class="form-label">Username Instagram</label>
        <input type="text" class="form-control" id="usernameIG" name="instagram" required />
      </div>
      <div class="col-md-6">
        <label for="jumlahOutlet" class="form-label">Jumlah Outlet</label>
        <input type="number" class="form-control" id="jumlahOutlet" name="outlet" required />
      </div>
      <div class="col-md-6">
        <label for="namaPJBisnis" class="form-label">Nama Penanggung Jawab Bisnis</label>
        <input type="text" class="form-control" id="namaPJBisnis" name="pic" required />
      </div>
      <div class="col-md-6">
        <label for="areaJangkauan" class="form-label">Area Jangkauan Outlet</label>
        <input type="text" class="form-control" id="areaJangkauan" name="area"
          placeholder="Kalimantan, Jawa, Sumatera, dll." required />
      </div>
      <div class="col-md-6">
        <label for="kontakPJBisnis" class="form-label">Kontak Penanggung Jawab Bisnis</label>
        <input type="text" class="form-control" id="kontakPJBisnis" name="contact" required />
      </div>
      <div class="col-md-6">
        <label for="rataRataKotor" class="form-label">Rata-rata penghasilan kotor bisnis per-bulan</label>
        <input type="text" class="form-control" id="rataRataKotor" name="gross_income" required />
      </div>
      <div class="col-md-6">
        <label for="emailBisnis" class="form-label">Email Bisnis</label>
        <input type="email" class="form-control" id="emailBisnis" name="email" required />
      </div>
      <div class="col-md-6">
        <label for="rataRataBersih" class="form-label">Rata-rata penghasilan bersih bisnis per-bulan</label>
        <input type="text" class="form-control" id="rataRataBersih" name="net_income" required />
      </div>
      <div class="col-md-6">
        <label for="kategoriBisnis" class="form-label">Kategori Bisnis</label>
        <select class="form-select" aria-label="Default select example" name="category_id" required>
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
        <input type="file" class="form-control" id="kontrak" required accept=".pdf" placeholder="PDF" />
      </div>
      <div class="col-12">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkbox" required />
        <label class="form-check-label" for="exampleCheck1"><a href="{{ route('syarat-ketentuan') }}"
            class="nav-link">Menyetujui Syarat & Ketentuan yang ditetapkan oleh Amang
            UMKM.</a></label>
        <div class="invalid-feedback">
          Kamu harus menyetujui syarat & ketentuan sebelum mengirim.
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Kirim</button>
        <a href="#"><button type="button" class="btn btn-outline-dark">Batal</button></a>
      </div>
    </form>
  </div>
</x-layout.admin.master>
