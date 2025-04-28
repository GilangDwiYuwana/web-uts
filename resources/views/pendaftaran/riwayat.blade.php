@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Riwayat Pendaftaran yang Dihapus</h1>

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
                    <form action="{{ route('pendaftaran.restore', $pendaftaran->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-sm">Pulihkan</button>
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
