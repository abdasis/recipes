<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="banner">
        <div class="container">
            <div class="row row-banner align-items-center">
                <div class="col-md-6">
                    <h1 class="title">Halo, Selamat Datang</h1>
                    <p class="deskripsi">
                        Halaman ini aku buat, karena aku sering kesusahan membuka <br>
                        Resep dari game My Cafe Recieps & Stories, semoga halaman ini <br>
                        Bisa membantu kamu juga!
                    </p>
                    <button class="btn btn-light">
                        Lihat Resep
                    </button>
                </div>
                <div class="col-md-6">
                    <img class="icon-blender d-grid mx-auto" src="https://mycafe.games/images/hero_recipes/coffee.png"
                         alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="data-resep">
            <div class="card shadow-sm rounded-3">
                <div class="card-body">
                    <h1 class="card-title card-title-30">
                        Daftar Resep Saat Ini
                    </h1>
                    <div class="row">
                        <div class="col-12">
                            <input type="text" class="form-control form-control-lg mb-3" placeholder="Cari Resep">
                        </div>
                        <div class="col-md-4 border-end pe-4">
                            <ul class="list-unstyled">
                                @foreach($data_kategori as $kategori)
                                    <li class="nav-item kategori-resep rounded-3 border p-3">
                                        <img src="{{asset($kategori->icon)}}" alt="">
                                        <span class="nama-item">
                                        {{$kategori->nama}}
                                        </span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
