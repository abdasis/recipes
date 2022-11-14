<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="card rounded-3">
        <div class="card-header">
            <h5 class="mb-0 fs-3">Form Tambah Kategori</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    @if($errors->any())
                        <div class="alert alert-danger bg-danger-lt">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session()->has('success'))
                        <div class="alert alert-success bg-success-alt">
                            {{session()->get('success')}}
                        </div>
                    @endif
                    <form wire:submit.prevent="simpan">
                        <div class="form-group mb-3">
                            <label for="">Urutan</label>
                            <input type="text" wire:model="urutan" placeholder="Masukan nama kategori" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Nama Kategori</label>
                            <input type="text" wire:model="nama_kategori" placeholder="Masukan nama kategori" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Pilih Icon</label>
                            <input type="file" class="form-control" wire:model="icon">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary float-end">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
