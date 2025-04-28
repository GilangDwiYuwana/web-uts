@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Pendaftaran Kursus</h1>

    <div class="d-flex mb-3">
        <a href="{{ route('pendaftaran.create') }}" class="btn btn-primary">Tambah Pendaftaran</a>
        <a href="{{ route('pendaftaran.riwayat') }}" class="btn btn-secondary">Riwayat Dihapus</a>
    </div>

    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Nama Peserta</th>
                <th>Email</th>
                <th>Nama Kursus</th>
                <th>Kategori</th>
                <th>Mulai</th>
                <th>Selesai</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pendaftarans as $pendaftaran)
            <tr>
                <td>{{ $pendaftaran->nama_peserta }}</td>
                <td>{{ $pendaftaran->email }}</td>
                <td>{{ $pendaftaran->nama_kursus }}</td>
                <td>{{ $pendaftaran->kategori_kursus }}</td>
                <td>{{ $pendaftaran->tanggal_mulai }}</td>
                <td>{{ $pendaftaran->tanggal_selesai }}</td>
                <td>{{ ucfirst($pendaftaran->status_pendaftaran) }}</td>
                <td>
                    <a href="{{ route('pendaftaran.edit', $pendaftaran->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pendaftaran.destroy', $pendaftaran->id) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination">
        {{ $pendaftarans->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
