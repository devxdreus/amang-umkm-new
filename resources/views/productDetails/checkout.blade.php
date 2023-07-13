<x-user-layout>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2>Detail Paket</h2>
                    <br />
                    <img class="justify-content-center mb-4" width="89%" height="30%"
                        src="https://i.postimg.cc/X7vvtzhx/image-68.png" alt="" />
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
                    <h4>Detail Kontrak</h4>
                    <embed width="80%" height="300" src="surat.pdf" type="" />
                </div>
                <div class="col-lg-4">
                    <h2>Data Diri</h2>
                    <hr />

                    <form>
                        <div class="mb-3">
                            <label for="noTelepon" class="form-label">Nomor Telepon</label>
                            <input type="text" id="noTelepon" class="form-control" required />
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
                        <h4>Pembayaran</h4>
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
                        <h6>Bank:</h6>
                        <img class="img-fluid" src="https://i.postimg.cc/m2rj4yZs/bank.png" alt="" />
                        <div class="mb-3">
                            <label for="namaCC" class="form-label">Nama Bank</label>
                            <input type="text" id="namaCC" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <label for="noCC" class="form-label">Nomor Credit Card</label>
                            <input type="text" id="noCC" class="form-control" required />
                        </div>
                        <a href="{{ route('checkout-confirm') }}"><button type="button"
                                class="btn btn-primary">Checkout</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-user-layout>
