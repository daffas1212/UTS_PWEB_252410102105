@props(['username' => null])

<header class="navbar">
    <a class="brand" href="{{ $username ? route('dashboard', ['username' => $username]) : route('login') }}">🎵 NgeMusic</a>

    @if ($username)
        <input type="checkbox" id="menu-toggle" class="menu-toggle">
        <label for="menu-toggle" class="hamburger">☰</label>

        <nav class="menu">
            <a href="{{ route('dashboard', ['username' => $username]) }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="{{ request()->routeIs('pengelolaan') ? 'active' : '' }}">Pengelolaan</a>
            <a href="{{ route('profile', ['username' => $username]) }}" class="{{ request()->routeIs('profile') ? 'active' : '' }}">Profile</a>
            <a href="{{ route('login') }}">Keluar</a>
        </nav>
    @endif
</header>
