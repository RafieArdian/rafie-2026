<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::insert([
            [
                'title' => 'Kalkulator CLI',
                'description' => 'Aplikasi kalkulator berbasis command line menggunakan Python.',
                'image' => null,
                'tech_stack' => 'Python',
                'github_url' => null,
                'demo_url' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Website Portfolio',
                'description' => 'Website portfolio responsif menggunakan HTML dan CSS.',
                'image' => null,
                'tech_stack' => 'HTML, CSS',
                'github_url' => null,
                'demo_url' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'To Do List App',
                'description' => 'Aplikasi manajemen tugas menggunakan JavaScript.',
                'image' => null,
                'tech_stack' => 'JavaScript',
                'github_url' => null,
                'demo_url' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}