@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
    <h1>Daftar Lagu</h1>
    <p>Semua lagu yang tersedia di NgeMusic.</p>

    <div class="card table-wrap">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Artis</th>
                    <th>Genre</th>
                    <th>Durasi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($daftarLagu as $lagu)
                    @include('partials.song-row', ['lagu' => $lagu, 'no' => $loop->iteration])
                @empty
                    <tr><td colspan="5">Belum ada lagu.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
