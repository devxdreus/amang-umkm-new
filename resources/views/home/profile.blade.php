<x-user-layout>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-3">Profil</h4>
                        <div class="text-center">
                            <img src="https://i.postimg.cc/PrcNMT3n/Group-2.png" class="rounded" alt="..."
                                width="180px" height="180px" />
                        </div>
                        <br />
                        <div class="text-center">
                            <b class="d-inline">Nama:</b>
                            <p class="d-inline">Muhammad Fulan</p>
                        </div>
                        <br />
                        <div class="text-center">
                            <b class="d-inline">Email:</b>
                            <p class="d-inline">fulan123@gmail.com</p>
                        </div>
                        <br />
                        <div class="text-center">
                            <a href="{{ url('/edit_profile') }}" class="btn btn-primary">Edit Profil</a>
                            <a href="{{ url('/edit_bisnis') }}" class="btn btn-primary">Edit Detail Bisnis</a>
                        </div>
                        <br />
                        <div class="d-grid gap-2 col-8 mx-auto">
                            <a href="#" class="btn btn-danger">Log out</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</x-user-layout>
