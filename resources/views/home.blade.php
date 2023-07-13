<x-user-layout>
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
            <a href="{{ route('product') }}">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://i.postimg.cc/nVkp1Gdx/Frame-560.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.postimg.cc/nVkp1Gdx/Frame-560.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.postimg.cc/nVkp1Gdx/Frame-560.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
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
                    <a href="{{ route('list-merchant') }}">
                        <div style="width: 170px; height: 145px;" class="rounded mx-auto d-block"><img
                                src="https://i.postimg.cc/k5z6WjJC/Category-Phone.png"></div>
                    </a>
                    <a href="{{ route('list-merchant') }}">
                        <div style="width: 170px; height: 145px;" class="rounded mx-auto d-block"><img
                                src="https://i.postimg.cc/6qND4NFv/Category-Phone-1.png"></div>
                    </a>
                    <a href="{{ route('list-merchant') }}">
                        <div style="width: 170px; height: 145px;" class="rounded mx-auto d-block"><img
                                src="https://i.postimg.cc/R0kY2BSD/Category-Phone-2.png"></div>
                    </a>
                    <a href="{{ route('list-merchant') }}">
                        <div style="width: 170px; height: 145px;" class="rounded mx-auto d-block"><img
                                src="https://i.postimg.cc/4y5FKHzD/Category-Phone-Camera-Hover-No.png"></div>
                    </a>
                    <a href="{{ route('list-merchant') }}">
                        <div style="width: 170px; height: 145px;" class="rounded mx-auto d-block"><img
                                src="https://i.postimg.cc/ZnR6c9kt/Category-Phone-3.png"></div>
                    </a>
                    <a href="{{ route('list-merchant') }}">
                        <div style="width: 170px; height: 145px;" class="rounded mx-auto d-block"><img
                                src="https://i.postimg.cc/SQT6KG8y/Category-Phone-4.png"></div>
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
                        <a href="{{ route('product') }}">
                            <div>
                                <img src="https://i.postimg.cc/SRQcdk19/sedang-Tren1.png"
                                    class="rounded mx-auto d-block">
                            </div>
                        </a>
                        <a href="{{ route('product') }}">
                            <div>
                                <img src="https://i.postimg.cc/8C5826FX/Cart.png" class="rounded mx-auto d-block">
                            </div>
                        </a>
                        <a href="{{ route('product') }}">
                            <div>
                                <img src="https://i.postimg.cc/9f3TSGNC/sedang-Tren2.png"
                                    class="rounded mx-auto d-block">
                            </div>
                        </a>
                        <a href="{{ route('product') }}">
                            <div>
                                <img src="https://i.postimg.cc/RZtJcWC8/sedang-Tren4.png"
                                    class="rounded mx-auto d-block">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
</x-user-layout>
