<x-user-layout>
  <section class="row pb-3 pt-3">
    <div class="col-7 border-end">
      <div
        style="
                          width: 400px;
                          height: 596px;
                      ">
        <img src="https://i.postimg.cc/Y2Vjq1vN/dl-beatsnoop-1.png" style="background-position: center;">
      </div>
    </div>
    <div class="col-5 ps-4">
      <h2>Buat Akun</h2>
      <h7>Masukkan Data Diri</h7>
      <br><br>
      <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group">
          <div class="mb-3">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" name="name"
              value="{{ old('value') }}">
            @error('name')
              <span class="text-danger fs-6">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email"
              value="{{ old('value') }}">
            @error('email')
              <span class="text-danger fs-6">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
            @error('password')
              <span class="text-danger fs-6">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="password_confirmation">Konfirmasi Password</label>
            <input type="password" class="form-control" id="password_confirmation" placeholder="Masukkan Password"
              name="password_confirmation">
            @error('password_confirmation')
              <span class="text-danger fs-6">{{ $message }}</span>
            @enderror
          </div>

          <div class="gap-2">
            <button type="submit" class="btn btn-primary">Daftar</button>
          </div>
        </div>
      </form>
    </div>
    </div>
  </section>
</x-user-layout>
