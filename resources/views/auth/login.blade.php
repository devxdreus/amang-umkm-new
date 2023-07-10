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
      <h2>Log In to Amang UMKM</h2>
      <h7>Masukkan Data Anda</h7>
      <br><br>
      <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group">
          <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email"
              value="{{ old('email') }}">
            @error('email')
              <span class="text-danger fs-6">{{ $message }}</span>
            @enderror
          </div>

          <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
            {{-- @error('password')
              <span class="text-danger fs-6">{{ $message }}</span>
            @enderror --}}
          </div>

          <div class="gap-2">
            <button type="submit" class="btn btn-primary me-2">Login</button>
            <span class="text-secondary">Belum punya akun? <a href="{{ route('register') }}">Daftar</a></span>
          </div>
        </div>
      </form>
    </div>
    </div>
  </section>
</x-user-layout>
