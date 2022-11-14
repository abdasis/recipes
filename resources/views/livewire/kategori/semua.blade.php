<div>
    {{-- Be like water. --}}
    <div class="card rounded-3">
        <div class="card-header d-flex align-items-center justify-content-between border-bottom border-light">
            <h5 class="fs-3 mb-0">Kategori Resep</h5>
            <a href="{{route('kategori.tambah')}}">
                <button class="btn btn-primary">
                    Kategori Baru
                </button>
            </a>
        </div>
        <div class="card-body">
            <livewire:kategori.tabel/>
        </div>
    </div>
</div>
