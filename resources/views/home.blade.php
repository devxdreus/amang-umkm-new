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
                <div
                    style="
                        width: 892px;
                        height: 344px;
                        background-image: url(https://i.postimg.cc/nVkp1Gdx/Frame-560.png);
                    ">
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
                        <div style="width: 170px; height: 145px;" class="bg-light border"><img
                                src="https://i.postimg.cc/k5z6WjJC/Category-Phone.png"></div>
                    </a>
                    <a href="{{ route('list-merchant') }}">
                        <div style="width: 170px; height: 145px;" class="bg-light border"><img
                                src="https://i.postimg.cc/6qND4NFv/Category-Phone-1.png"></div>
                    </a>
                    <a href="{{ route('list-merchant') }}">
                        <div style="width: 170px; height: 145px;" class="bg-light border"><img
                                src="https://i.postimg.cc/R0kY2BSD/Category-Phone-2.png"></div>
                    </a>
                    <a href="{{ route('list-merchant') }}">
                        <div style="width: 170px; height: 145px;" class="bg-light border"><img
                                src="https://i.postimg.cc/4y5FKHzD/Category-Phone-Camera-Hover-No.png"></div>
                    </a>
                    <a href="{{ route('list-merchant') }}">
                        <div style="width: 170px; height: 145px;" class="bg-light border"><img
                                src="https://i.postimg.cc/ZnR6c9kt/Category-Phone-3.png"></div>
                    </a>
                    <a href="{{ route('list-merchant') }}">
                        <div style="width: 170px; height: 145px;" class="bg-light border"><img
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
                            <div style="width: 270px; height: 250px; border-radius: 4px;" class="bg-light border">
                                <img src="https://i.postimg.cc/SRQcdk19/sedang-Tren1.png">
                            </div>
                        </a>
                        <a href="{{ route('product') }}">
                            <div style="width: 270px; height: 250px; border-radius: 4px;" class="bg-light border">
                                <img src="https://i.postimg.cc/8C5826FX/Cart.png">
                            </div>
                        </a>
                        <a href="{{ route('product') }}">
                            <div style="width: 270px; height: 250px; border-radius: 4px;" class="bg-light border">
                                <img src="https://i.postimg.cc/9f3TSGNC/sedang-Tren2.png">
                            </div>
                        </a>
                        <a href="{{ route('product') }}">
                            <div style="width: 270px; height: 250px; border-radius: 4px;" class="bg-light border">
                                <img src="https://i.postimg.cc/RZtJcWC8/sedang-Tren4.png">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
</x-user-layout>
