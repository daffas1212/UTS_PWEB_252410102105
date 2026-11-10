@extends('layouts.app')

@section('title', 'Dashboard')

//nyoba
@section('content')
    <h1>Halo, {{ $username }}!</h1>
    <p>Selamat datang di NgeMusic, tempat melihat daftar lagu.</p>

    <div class="grid">
        <div class="card">
            <p>Total Lagu</p>
            <div class="stat">{{ $totalLagu }}</div>
        </div>
        <div class="card">
            <p>Pengguna Aktif</p>
            <div class="stat">{{ $username }}</div>
        </div>
        <div class="card">
            <p>Genre Terbanyak</p>
            <div class="stat">{{ $genreTerbanyak }}</div>
        </div>
    </div>
@endsection
