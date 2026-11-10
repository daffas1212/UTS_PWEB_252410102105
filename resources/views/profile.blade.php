@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <h1>Profil Pengguna</h1>

    <div class="card">
        <div class="avatar">{{ strtoupper(substr($username, 0, 1)) }}</div>
        <h2>{{ $username }}</h2>
        <p>Bergabung sejak {{ $bergabung }}</p>
    </div>

    <h2 style="margin:16px 0">Lagu Favoritku</h2>
    <div class="grid">
        @foreach ($laguFavorit as $lagu)
            <div class="card">
                <strong>{{ $lagu['judul'] }}</strong>
                <p>{{ $lagu['artis'] }} &bull; {{ $lagu['genre'] }}</p>
            </div>
        @endforeach
    </div>
@endsection
