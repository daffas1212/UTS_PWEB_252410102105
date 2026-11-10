<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private function daftarLagu(): array
    {
        return [
            ['judul' => 'Hati-Hati di Jalan', 'artis' => 'Tulus',         'genre' => 'Pop',        'durasi' => '4:06'],
            ['judul' => 'Ini Abadi',          'artis' => 'perunggu',      'genre' => 'Indie Rock', 'durasi' => '3:52'],
            ['judul' => 'Rasa Ini',           'artis' => 'Viera',         'genre' => 'Pop Rock',   'durasi' => '4:00'],
            ['judul' => 'Evaluasi',           'artis' => 'Hindia',        'genre' => 'Indie',      'durasi' => '3:14'],
            ['judul' => 'Birds Of a Feather', 'artis' => 'Billie Eilish', 'genre' => 'Pop',        'durasi' => '3:30'],
            ['judul' => 'Komang',             'artis' => 'Raim Laode',    'genre' => 'Pop',        'durasi' => '4:12'],
        ];
    }

    private function ambilUsername(Request $request): ?string
    {
        return $request->query('username');
    }

    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $request->validate(
            ['username' => 'required|string|min:3|max:20'],
            [
                'username.required' => 'Username wajib diisi.',
                'username.min'      => 'Username minimal 3 karakter.',
                'username.max'      => 'Username maksimal 20 karakter.',
            ]
        );

        return redirect()->route('dashboard', ['username' => $request->input('username')]);
    }

    public function dashboard(Request $request)
    {
        $username = $this->ambilUsername($request);
        if (! $username) {
            return redirect()->route('login');
        }

        $lagu = $this->daftarLagu();

        $hitung = array_count_values(array_column($lagu, 'genre'));
        arsort($hitung);

        return view('dashboard', [
            'username'       => $username,
            'totalLagu'      => count($lagu),
            'genreTerbanyak' => array_key_first($hitung),
        ]);
    }

    public function pengelolaan(Request $request)
    {
        $username = $this->ambilUsername($request);
        if (! $username) {
            return redirect()->route('login');
        }

        return view('pengelolaan', [
            'username'   => $username,
            'daftarLagu' => $this->daftarLagu(),
        ]);
    }

    public function profile(Request $request)
    {
        $username = $this->ambilUsername($request);
        if (! $username) {
            return redirect()->route('login');
        }

        $lagu = $this->daftarLagu();

        return view('profile', [
            'username'    => $username,
            'bergabung'   => now()->format('d M Y'),
            'laguFavorit' => [$lagu[1], $lagu[3], $lagu[5]],
        ]);
    }
}
