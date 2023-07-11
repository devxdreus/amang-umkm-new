<x-layout.admin.master title="Paket Usaha">
  <div class="row">
    <div class="col">
      <div class="mb-3">
        <a href="{{ route('panel.packages.create') }}" class="btn btn-sm btn-primary">Tambah Paket Usaha</a>
      </div>
      <table class="table table-striped table-hover">
        <thead>
          <tr class="fw-bolder text-center">
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Benefit</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @if ($packages)
            @foreach ($packages as $package)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $package->name }}</td>
                <td>{!! str_replace('. ', '.<br>', $package->benefit) !!}</td>
                <td>{{ $package->description }}</td>
                <td>Rp{{ number_format($package->price, 0, ',', '.') }}</td>
                <td>
                  <div class="d-flex flex-column align-items-center">
                    <a href="{{ route('panel.packages.edit', $package->id) }}"
                      class="btn btn-sm btn-warning w-80px m-3">Edit</a>
                    <form action="{{ route('panel.packages.destroy', $package->id) }}" method="post">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-sm btn-danger w-80px m-3">Delete</button>
                    </form>
                  </div>
                </td>
              </tr>
            @endforeach
          @endif
        </tbody>
      </table>
    </div>
  </div>
</x-layout.admin.master>
