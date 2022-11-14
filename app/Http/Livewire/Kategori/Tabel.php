<?php

namespace App\Http\Livewire\Kategori;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Kategori;

class Tabel extends DataTableComponent
{
    protected $model = Kategori::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->sortable(),
            Column::make('Nama', 'nama')->searchable(),
            Column::make("Dibuat Pada", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
            Column::make('Aksi', 'id')->format(function ($id, $model, $row){
                return view('partials.tombol_aksi',[
                    'edit' => route('kategori.edit', $model),
                ]);
            })
        ];
    }
}
