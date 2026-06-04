<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'name' => 'Rafie Saputra',
            'title' => 'Mahasiswa Ilmu Komputer MNC University',
            'about' => 'Mahasiswa S1 Ilmu Komputer yang antusias mempelajari pemrograman dan pengembangan web modern.',
            'email' => 'rafie@example.com',
            'linkedin' => 'https://linkedin.com/in/rafie',
            'github' => 'https://github.com/rafie',
            'cv' => null,
        ]);
    }
}
