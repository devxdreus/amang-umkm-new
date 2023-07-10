<footer class="container-fluid bg-dark text-white-50 p-5 mt-5">
    <div class="row">
        <div class="col-3">
            <span class="fs-5 fw-medium d-lg-inline-block mb-3">Support</span>
            <p class="mb-1">Banjarmasin, Kalimantan Selatan, Indonesia</p>
            <p class="mb-1">support@amangumkm.com</p>
            <p class="mb-1">+62 821-3456-7890</p>
        </div>
        <div class="col-2">
            <span class="fs-5 fw-medium d-lg-inline-block mb-3">Account</span>
            <a href="{{url('/profile')}}" class="nav-link mb-1">My Account</a>
            <a href="{{url('/signin')}}" class="nav-link mb-1">Login</a>
            <a href="{{url('/')}}" class="nav-link mb-1">Shop</a>
        </div>
        <div class="col-2">
            <span class="fs-5 fw-medium d-lg-inline-block mb-3">Quick Links</span>
            <p class="mb-1">Privacy Policy</p>
            <p class="mb-1">Terms of Use</p>
            <p class="mb-1">FAQ</p>
            <a href="{{url('contact')}}" class="nav-link"><p class="mb-1">Contact</p></a>
        </div>
        <div class="col-2">
            <span class="fs-5 fw-medium d-lg-inline-block mb-3">Social Media</span>
            <p class="mb-1">
                <img src="https://i.postimg.cc/YS4qBVZW/Icon-Facebook.png">
                <img class="ms-1" src="https://i.postimg.cc/6Qx1B41f/Icon-Twitter.png">
                <img class="ms-1" src="https://i.postimg.cc/LXHC1KSq/Group.png">
                <img class="ms-2" src="https://i.postimg.cc/Hnn66wVd/Vector.png"></p>
        </div>
        <div class="col-2">
            <span class="fs-5 fw-medium d-lg-inline-block mb-3">Menjadi Mitra</span>
            <a href="{{ url('/form_mitra') }}"><button class="btn btn-outline-light" type="button">Click Here</button></a>
        </div>
    </div>
</footer>