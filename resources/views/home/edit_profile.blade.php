<x-user-layout>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-3">Edit Profil</h4>
                            <div class="text-center">
                                <img src="https://i.postimg.cc/PrcNMT3n/Group-2.png" class="rounded" alt="..."
                                    width="180px" height="180px" />
                            </div>
                            <form action="{{ route('profile') }}">
                                <div class="mb-3">
                                    <label for="editNama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="editNama" />
                                </div>
                                <div class="mb-3">
                                    <label for="editEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="editEmail" />
                                </div>
                                <br />
                                <div class="text-center">
                                    <button type="submit" class="btn btn-dark">Edit</button>
                                    <a href="{{ route('profile') }}"><button type="button"
                                            class="btn btn-outline-dark">
                                            Batal
                                        </button></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
</x-user-layout>
