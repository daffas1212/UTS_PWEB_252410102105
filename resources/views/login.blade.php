@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="card login-card">
        <h1>Masuk ke NgeMusic </h1>
        <p>Masukkan username anda.</p>

        <form action="{{ route('login.process') }}" method="POST">
            @csrf
            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="{{ old('username') }}" placeholder="contoh: budi" autofocus>
            @error('username')
                <small class="error">{{ $message }}</small>
            @enderror

            <button type="submit" class="btn">Masuk</button>
        </form>
    </div>
@endsection
