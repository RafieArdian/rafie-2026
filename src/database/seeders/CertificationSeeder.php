<?php

namespace Database\Seeders;

use App\Models\Certification;
use Illuminate\Database\Seeder;

class CertificationSeeder extends Seeder
{
    public function run(): void
    {
        Certification::insert([
            [
                'title' => 'Belajar Dasar Pemrograman Web',
                'issuer' => 'Dicoding Indonesia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'CS50 Introduction to Computer Science',
                'issuer' => 'Harvard University via edX',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}