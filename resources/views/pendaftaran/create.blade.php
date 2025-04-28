@extends('layouts.app')

@section('content')
<style>
    .form-container {
        max-width: 1200px;
        margin: 0 auto;
        background-color: #ffffff;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-container h1 {
        text-align: center;
        margin-bottom: 30px;
        font-size: 2em;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"],
    select {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 1em;
    }

    .form-actions {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
    }

    .form-actions button {
        padding: 12px 24px;
        font-size: 1em;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .form-actions .btn-submit {
        background-color: #28a745;
        color: #ffffff;
    }

    .form-actions .btn-cancel {
        background-color: #6c757d;
        color: #ffffff;
    }

    @media (max-width: 600px) {
        .form-actions {
            flex-direction: column;
            align-items: stretch;
        }
    }
</style>

<div class="form-container">
    <h1>Form Pendaftaran Kursus</h1>

    <form action="{{ route('pendaftaran.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama_peserta">Nama Peserta</label>
            <input type="text" name="nama_peserta" id="nama_peserta" value="{{ old('nama_peserta') }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="nama_kursus">Nama Kursus</label>
            <input type="text" name="nama_kursus" id="nama_kursus" value="{{ old('nama_kursus') }}" required>
        </div>

        <div class="form-group">
            <label for="kategori_kursus">Kategori Kursus</label>
            <input type="text" name="kategori_kursus" id="kategori_kursus" value="{{ old('kategori_kursus') }}" required>
        </div>

        <div class="form-group">
            <label for="tanggal_mulai">Tanggal Mulai</label>
            <input type="date" name="tanggal_mulai" id="tanggal_mulai" value="{{ old('tanggal_mulai') }}" required>
        </div>

        <div class="form-group">
            <label for="tanggal_selesai">Tanggal Selesai</label>
            <input type="date" name="tanggal_selesai" id="tanggal_selesai" value="{{ old('tanggal_selesai') }}" required>
        </div>

        <div class="form-group">
            <label for="status_pendaftaran">Status Pendaftaran</label>
            <select name="status_pendaftaran" id="status_pendaftaran" required>
                <option value="terdaftar" {{ old('status_pendaftaran') == 'terdaftar' ? 'selected' : '' }}>Terdaftar</option>
                <option value="aktif" {{ old('status_pendaftaran') == 'aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="selesai" {{ old('status_pendaftaran') == 'selesai' ? 'selected' : '' }}>Selesai</option>
                <option value="dibatalkan" {{ old('status_pendaftaran') == 'dibatalkan' ? 'selected' : '' }}>Dibatalkan</option>
            </select>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-submit">Simpan</button>
            <a href="{{ route('pendaftaran.index') }}" class="btn-cancel" style="text-decoration:none; display:inline-block; text-align:center;">Batal</a>
        </div>

    </form>
</div>
@endsection
