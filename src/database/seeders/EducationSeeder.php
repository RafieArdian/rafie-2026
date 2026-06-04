<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    public function run(): void
    {
        Education::create([
            'institution' => 'MNC University',
            'major' => 'S1 Ilmu Komputer',
            'period' => '2024 - Sekarang',
            'description' => 'Fokus pada fundamental algoritma, struktur data dan pengembangan sistem.',
        ]);
    }
}