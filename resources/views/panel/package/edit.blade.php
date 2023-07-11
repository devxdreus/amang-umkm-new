<x-layout.admin.master title="Paket Usaha">
  <div class="row justify-content-center">
    <div class="col-10">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title mb-3">Tambah Paket Usaha</h5>
          <form action="{{ route('panel.packages.update', $package->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="name" class="form-label">Nama Paket</label>
              <input type="text" class="form-control" id="name" placeholder="Nama Paket Usaha" name="name"
                value="{{ old('name') ?? $package->name }}">

              @error('name')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="mb-3">
              <label for="benefit" class="form-label">Benefit</label>
              <textarea class="form-control" id="benefit" placeholder="Benefit paket" name="benefit" rows="3">{{ old('benefit') ?? $package->benefit }}</textarea>
              <span class="form-text d-block">Pisahkan setiap benefit menggunakan tanda koma (,)</span>

              @error('benefit')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">Deskripsikan paket anda</label>
              <textarea class="form-control" id="description" placeholder="Deskripsi paket" name="description" rows="4">{{ old('description') ?? $package->description }}</textarea>

              @error('description')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="mb-9">
              <label for="price" class="form-label">Harga Paket</label>
              <div class="input-group">
                <span class="input-group-text" id="price">Rp</span>
                <input type="number" class="form-control" placeholder="10.000.000" aria-label="Username"
                  aria-describedby="price" name="price" value="{{ old('price') ?? $package->price }}">
              </div>

              @error('price')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Tambah Paket</button>
          </form>
        </div>
      </div>
    </div>
</x-layout.admin.master>
