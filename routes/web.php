<?php

use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('pendaftaran.index');
});

Route::resource('pendaftaran', PendaftaranController::class);

// Tambahan untuk melihat data yang dihapus (soft deleted)
Route::get('riwayat-pendaftaran', [PendaftaranController::class, 'riwayat'])->name('pendaftaran.riwayat');
Route::post('pendaftaran/{id}/restore', [PendaftaranController::class, 'restore'])->name('pendaftaran.restore');
