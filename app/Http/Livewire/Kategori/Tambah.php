<?php

namespace App\Http\Livewire\Kategori;

use App\Models\Kategori;
use Livewire\Component;
use Livewire\WithFileUploads;

class Tambah extends Component
{
    use WithFileUploads;
    public $nama_kategori;
    public $icon;
    public $urutan;

    public function rules()
    {
        return[
            'nama_kategori' => 'required',
            'icon' => 'required|file',
            'urutan' => 'required',
        ];
    }


    public function simpan()
    {
        $this->validate();

        $nama_file = \Str::uuid() . ".{$this->icon->extension()}";
        Kategori::create([
            'nama' => $this->nama_kategori,
            'icon' => $this->icon->storeAs('upload', $nama_file),
            'urutan' => $this->urutan,
        ]);
        session()->flash('success' , 'Data berhasil disimpan');
    }

    public function render()
    {
        return view('livewire.kategori.tambah');
    }
}
