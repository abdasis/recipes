<?php

namespace App\Http\Livewire\Kategori;

use App\Models\Kategori;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{

    use WithFileUploads;

    public $nama_kategori;
    public $icon;
    public $kategori_id;
    public $icon_saat_ini;
    public $urutan;


    public function mount(Kategori $kategori)
    {
        $this->nama_kategori = $kategori->nama;
        $this->kategori_id = $kategori->id;
        $this->icon_saat_ini = $kategori->icon;
        $this->urutan = $kategori->urutan;
    }

    public function rules()
    {
        return [
            'nama_kategori' => 'required',
            'icon' => 'nullable|file'
        ];
    }


    public function simpan()
    {
        $this->validate();

        if (!empty($this->icon)) {
            $nama_file = \Str::uuid() . ".{$this->icon->extension()}";
            $nama_file = $this->icon->storeAs('upload', $nama_file);
        } else {
            $nama_file = "upload/{$this->icon_saat_ini}";
        }

        Kategori::find($this->kategori_id)->update([
            'nama' => $this->nama_kategori,
            'icon' => $nama_file
        ]);
        session()->flash('success', 'Data berhasil disimpan');
    }


    public function render()
    {
        return view('livewire.kategori.edit');
    }
}
