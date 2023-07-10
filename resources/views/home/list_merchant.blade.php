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

    <main class="container mt-3" style="height: 1000px">
        <section>
            <div class="row mt-5">
                <div class="col">
                    <div class="d-flex align-items-center mb-2">
                        <div style="width: 15px; height: 30px" class="bg-primary d-inline-block me-3 rounded"></div>
                        <span class="text-primary">All Merchant</span>
                    </div>
                    <h3>All Merchant</h3>
                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ url('/product_detail') }}">
                            <div style="width: 270px; height: 250px" class="bg-light border"><img src="https://i.postimg.cc/SRQcdk19/sedang-Tren1.png"></div>
                        </a>
                        <a href="{{ url('/product_detail') }}">
                            <div style="width: 270px; height: 250px" class="bg-light border"><img src="https://i.postimg.cc/8C5826FX/Cart.png"></div>
                        </a>
                        <a href="{{ url('/product_detail') }}">
                            <div style="width: 270px; height: 250px" class="bg-light border"><img src="https://i.postimg.cc/9f3TSGNC/sedang-Tren2.png"></div>
                        </a>
                        <a href="{{ url('/product_detail') }}">
                            <div style="width: 270px; height: 250px" class="bg-light border"><img src="https://i.postimg.cc/RZtJcWC8/sedang-Tren4.png"></div>
                        </a>
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ url('/product_detail') }}">
                            <div style="width: 270px; height: 250px" class="bg-light border"><img src="https://i.postimg.cc/9f3TSGNC/sedang-Tren2.png"></div>
                        </a>
                        <a href="{{ url('/product_detail') }}">
                            <div style="width: 270px; height: 250px" class="bg-light border"><img src="https://i.postimg.cc/RZtJcWC8/sedang-Tren4.png"></div>
                        </a>
                        <a href="{{ url('/product_detail') }}">
                            <div style="width: 270px; height: 250px" class="bg-light border"><img src="https://i.postimg.cc/8C5826FX/Cart.png"></div>
                        </a>
                        <a href="{{ url('/product_detail') }}">
                            <div style="width: 270px; height: 250px" class="bg-light border"><img src="https://i.postimg.cc/SRQcdk19/sedang-Tren1.png"></div>
                        </a>
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ url('/product_detail') }}">
                            <div style="width: 270px; height: 250px" class="bg-light border"><img src="https://i.postimg.cc/8C5826FX/Cart.png"></div>
                        </a>
                        <a href="{{ url('/product_detail') }}">
                            <div style="width: 270px; height: 250px" class="bg-light border"><img src="https://i.postimg.cc/SRQcdk19/sedang-Tren1.png"></div>
                        </a>
                        <a href="{{ url('/product_detail') }}">
                            <div style="width: 270px; height: 250px" class="bg-light border"><img src="https://i.postimg.cc/RZtJcWC8/sedang-Tren4.png"></div>
                        </a>
                        <a href="{{ url('/product_detail') }}">
                            <div style="width: 270px; height: 250px" class="bg-light border"><img src="https://i.postimg.cc/9f3TSGNC/sedang-Tren2.png"></div>
                        </a>
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