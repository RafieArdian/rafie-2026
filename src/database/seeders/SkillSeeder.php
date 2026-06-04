<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $currentSkills = [
            'Python',
            'Java',
            'C++',
            'HTML/CSS',
            'VS Code',
            'Git',
            'GitHub',
            'Linux',
        ];

        foreach ($currentSkills as $skill) {
            Skill::create([
                'name' => $skill,
                'type' => 'current',
            ]);
        }

        $learningSkills = [
            'JavaScript',
            'React',
            'SQL',
        ];

        foreach ($learningSkills as $skill) {
            Skill::create([
                'name' => $skill,
                'type' => 'learning',
            ]);
        }
    }
}