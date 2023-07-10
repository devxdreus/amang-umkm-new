<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Amang UMKM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
</head>

<body>

  @include('partials._header')

  <main class="container mt-3" style="height: 1100px">
    <section class="row border-bottom pb-3 pt-3">
        <div class="col-2 border-end">
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action active">
                        Makanan & Minuman
                    </a>
                <a href="#" class="list-group-item list-group-item-action">
                        Fashion
                    </a>
                <a href="#" class="list-group-item list-group-item-action">
                        Elektronik
                    </a>
                <a href="#" class="list-group-item list-group-item-action">
                        Kesehatan
                    </a>
                <a href="#" class="list-group-item list-group-item-action">
                        Kecantikan
                    </a>
                <a href="#" class="list-group-item list-group-item-action">
                        Olahraga
                    </a>
                <a href="#" class="list-group-item list-group-item-action">
                        Lainnya
                    </a>
            </div>
        </div>
        <div class="col-10 ps-4">
            <a href="{{ url('/product_detail') }}">
                <div style="
                        width: 892px;
                        height: 344px;
                        background-image: url(https://i.postimg.cc/nVkp1Gdx/Frame-560.png);
                    "></div>
            </a>
        </div>
    </section>

    <section>
        <div class="row mt-5">
            <div class="col">
                <div class="d-flex align-items-center mb-2">
                    <div style="width: 15px; height: 30px" class="bg-primary d-inline-block me-3 rounded"></div>
                    <span class="text-primary">Kategori</span>
                </div>
                <h3>Browse by Category</h3>
                <div class="d-flex justify-content-between mt-5">
                    <a href="{{ url('/list_merchant') }}">
                        <div style="width: 170px; height: 145px;" class="bg-light border"><img src="https://i.postimg.cc/k5z6WjJC/Category-Phone.png"></div>
                    </a>
                    <a href="{{ url('/list_merchant') }}">
                        <div style="width: 170px; height: 145px;" class="bg-light border"><img src="https://i.postimg.cc/6qND4NFv/Category-Phone-1.png"></div>
                    </a>
                    <a href="{{ url('/list_merchant') }}">
                        <div style="width: 170px; height: 145px;" class="bg-light border"><img src="https://i.postimg.cc/R0kY2BSD/Category-Phone-2.png"></div>
                    </a>
                    <a href="{{ url('/list_merchant') }}">
                        <div style="width: 170px; height: 145px;" class="bg-light border"><img src="https://i.postimg.cc/4y5FKHzD/Category-Phone-Camera-Hover-No.png"></div>
                    </a>
                    <a href="{{ url('/list_merchant') }}">
                        <div style="width: 170px; height: 145px;" class="bg-light border"><img src="https://i.postimg.cc/ZnR6c9kt/Category-Phone-3.png"></div>
                    </a>
                    <a href="{{ url('/list_merchant') }}">
                        <div style="width: 170px; height: 145px;" class="bg-light border"><img src="https://i.postimg.cc/SQT6KG8y/Category-Phone-4.png"></div>
                    </a>
                </div>
            </div>
        </div>

        <section>
            <div class="row mt-5">
                <div class="col">
                    <div class="d-flex align-items-center mb-2">
                        <div style="width: 15px; height: 30px" class="bg-primary d-inline-block me-3 rounded"></div>
                        <span class="text-primary">Rekomendasi</span>
                    </div>
                    <h3>Best Selling Product</h3>
                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ url('/product_detail') }}">
                            <div style="width: 270px; height: 250px; border-radius: 4px;" class="bg-light border">
                                <img src="https://i.postimg.cc/SRQcdk19/sedang-Tren1.png">
                            </div>
                        </a>
                        <a href="{{ url('/product_detail') }}">
                            <div style="width: 270px; height: 250px; border-radius: 4px;" class="bg-light border">
                                <img src="https://i.postimg.cc/8C5826FX/Cart.png">
                            </div>
                        </a>
                        <a href="{{ url('/product_detail') }}">
                            <div style="width: 270px; height: 250px; border-radius: 4px;" class="bg-light border">
                                <img src="https://i.postimg.cc/9f3TSGNC/sedang-Tren2.png">
                            </div>
                        </a>
                        <a href="{{ url('/product_detail') }}">
                            <div style="width: 270px; height: 250px; border-radius: 4px;" class="bg-light border">
                                <img src="https://i.postimg.cc/RZtJcWC8/sedang-Tren4.png">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
</main>

  @include('partials._footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>
