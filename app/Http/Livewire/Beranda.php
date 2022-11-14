<?php

namespace App\Http\Livewire;

use App\Models\Kategori;
use Livewire\Component;

class Beranda extends Component
{
    public function render()
    {
        return view('livewire.beranda',[
            'data_kategori' => Kategori::orderBy('urutan')->get(),
        ])->layout('layouts.guest');
    }
}
