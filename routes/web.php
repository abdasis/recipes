<?php

use App\Http\Livewire\Beranda;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Kategori\Semua;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Beranda::class)->name('beranda');
Route::get('/dashboard', Dashboard::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
Route::group(['prefix' => 'kategori'], function (){
    Route::get('/semua', Semua::class)->name('kategori.semua');
    Route::get('/tambah', \App\Http\Livewire\Kategori\Tambah::class)->name('kategori.tambah');
    Route::get('/edit/{kategori}', \App\Http\Livewire\Kategori\Edit::class)->name('kategori.edit');
});

require __DIR__.'/auth.php';
