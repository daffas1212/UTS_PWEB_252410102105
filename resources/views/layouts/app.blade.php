<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - NgeMusic</title>
    <style>
        :root { --bg:#0f1115; --card:#1a1d24; --text:#e8eaed; --muted:#9aa0a6; --accent:#1db954; }
        * { box-sizing:border-box; margin:0; padding:0; }
        body { font-family:system-ui,sans-serif; background:var(--bg); color:var(--text);
               min-height:100vh; display:flex; flex-direction:column; }
        a { color:inherit; text-decoration:none; }
        .container { width:100%; max-width:960px; margin:0 auto; padding:24px 16px; flex:1; }
        h1 { margin-bottom:8px; } p { color:var(--muted); margin-bottom:16px; }

        /* Navbar */
        .navbar { background:var(--card); display:flex; align-items:center; justify-content:space-between;
                  flex-wrap:wrap; padding:14px 20px; position:sticky; top:0; }
        .brand { font-weight:700; font-size:1.2rem; color:var(--accent); }
        .menu { display:flex; gap:8px; }
        .menu a { padding:8px 14px; border-radius:8px; }
        .menu a:hover, .menu a.active { background:var(--accent); color:#000; }
        .menu-toggle, .hamburger { display:none; }

        /* Komponen umum */
        .card { background:var(--card); border-radius:14px; padding:24px; margin-bottom:16px; }
        .grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:16px; }
        .stat { font-size:2rem; font-weight:700; color:var(--accent); }
        .btn { background:var(--accent); color:#000; border:0; padding:12px 20px; border-radius:8px;
               font-weight:600; cursor:pointer; width:100%; }
        input { width:100%; padding:12px; margin:6px 0; border-radius:8px; border:1px solid #333;
                background:var(--bg); color:var(--text); }
        .error { color:#ff6b6b; display:block; margin-bottom:10px; }
        .login-card { max-width:420px; margin:40px auto; }
        .table-wrap { overflow-x:auto; }
        table { width:100%; border-collapse:collapse; }
        th, td { text-align:left; padding:12px; border-bottom:1px solid #2a2e37; }
        th { color:var(--muted); font-weight:500; }
        .avatar { width:90px; height:90px; border-radius:50%; background:var(--accent); color:#000;
                  display:flex; align-items:center; justify-content:center; font-size:2.5rem; font-weight:700; margin-bottom:16px; }
        footer { text-align:center; padding:20px; color:var(--muted); background:var(--card); }

        /* Responsive (HP) */
        @media (max-width:640px) {
            .hamburger { display:block; font-size:1.6rem; cursor:pointer; }
            .menu { display:none; flex-direction:column; width:100%; margin-top:10px; }
            .menu-toggle:checked ~ .menu { display:flex; }
        }
    </style>
</head>
<body>
    {{-- x-component: Navbar & Footer --}}
    <x-navbar :username="$username ?? null" />

    <main class="container">
        @yield('content')
    </main>

    <x-footer />
</body>
</html>
