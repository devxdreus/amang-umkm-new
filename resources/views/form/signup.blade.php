<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Amang UMKM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
</head>

<body>

    @include('partials._header')

    <main class="form-registration container mt-3" style="height: 650px">
        <section class="row pb-3 pt-3">
            <div class="col-7 border-end">
                <div style="
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
                <form action="/signin" method="POST">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control mb-3" id="nama" placeholder="Masukkan Nama">
                    <label for="nama">Email</label>
                    <input type="email" class="form-control mb-3" id="email" placeholder="Masukkan Email">
                    <label for="nama">Nomor Telpon</label>
                    <input type="text" class="form-control mb-3" id="nomorTelpon" placeholder="Masukkan Nomor Telpon">
                    <label for="nama">Password</label>
                    <input type="password" class="form-control mb-3" id="password" placeholder="Masukkan Password">
                    <label for="nama">Konfirmasi Password</label>
                    <input type="password" class="form-control mb-3" id="confirmPassword" placeholder="Masukkan Password">
                    <div class="gap-2">
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </section>
    </main>

    @include('partials._footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>