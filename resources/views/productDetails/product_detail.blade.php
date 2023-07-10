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

    <main class="container mt-3" style="height: 750px">
        <section class="row pb-3 pt-3">
            <div class="col-5">
                <div style="
                            width: 100%;
                            height: 600px;
                            background-image: url(https://i.postimg.cc/X7vvtzhx/image-68.png);
                        ">
                    <!-- <img src="https://i.postimg.cc/Y2Vjq1vN/dl-beatsnoop-1.png" style="background-position: center;"> -->
                </div>
            </div>

            <div class="col-2 ps-1 border-end">
                <div class="d-flex flex-column">
                    <div style="width: 170px; height: 138px; margin-bottom: 16px; background-image: url(https://i.postimg.cc/wMLnrgz3/Frame-895.png)" class="bg-light border"></div>
                    <div style="width: 170px; height: 138px; margin-bottom: 16px; background-image: url(https://i.postimg.cc/3JPdpZSB/Frame-897.png)" class="bg-light border"></div>
                    <div style="width: 170px; height: 138px; margin-bottom: 16px; background-image: url(https://i.postimg.cc/hGnvZtqQ/Frame-896.png)" class="bg-light border"></div>
                    <div style="width: 170px; height: 138px; background-image: url(https://i.postimg.cc/j2DSnWym/Frame-919.png)" class="bg-light border"></div>
                </div>
            </div>

            <div class="col-5">
                <div>
                    <h4>Nama Mitra</h4>
                    <img src="https://i.postimg.cc/BQBGhV8n/Frame-922.png" style="background-position: center;">
                    <div>
                        <b>Mulai Dari</b><br>
                        <b>Rp9.000.000</b>
                    </div>
                    <div style="text-align: justify;">
                        <p>Perusahaan yang telah berdiri selama 28 tahun ini telah membuka hampir 200 gerai yang tersebar di seluruh dunia, termasuk Indonesia. Hadirnya Kkuldak di Indonesia tidak terlepas dari Korean wave yang mengakibatkan banyak masyarakat
                            menggemari sesuatu yang berbau Korea, termasuk kuliner.</p>
                    </div>
                    <div class="border-bottom">
                        <h4>Detail Bisnis</h4>
                        <b>Sosial Media</b><br>
                        <p>Kkuldak.id</p>
                        <b>Berdiri Sejak</b><br>
                        <p>17 Juni 2004</p>
                        <b>Kategori</b><br>
                        <p>Makanan & Minuman</p>
                        <b>Area Jangkauan</b><br>
                        <p>Indonesia</p>
                        <b>Jumlah Outlet</b><br>
                        <p>100 Outlet</p>
                        <b>Rata-rata Penghasilan Bersih Per-bulan</b><br>
                        <p>Rp7.000.000</p>
                    </div>
                    <div>
                        <div class="d-flex gap-2 mt-3">
                            <a href="{{ url('/checkout') }}"><button class="btn btn-danger" type="button">Buy Now</button></a>
                            <button class="btn btn-outline-dark" type="button">Hubungi Franchisor</button>
                        </div>
                    </div>
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