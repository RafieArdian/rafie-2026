<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Education;
use App\Models\Certification;

class Portfolio extends Component
{
    public function render()
    {
        return view('livewire.portfolio', [
            'profile' => Profile::first(),

            'currentSkills' => Skill::where('type', 'current')->get(),

            'learningSkills' => Skill::where('type', 'learning')->get(),

            'projects' => Project::latest()->get(),

            'educations' => Education::latest()->get(),

            'certifications' => Certification::latest()->get(),
        ])->layout('layouts.app');
    }
}