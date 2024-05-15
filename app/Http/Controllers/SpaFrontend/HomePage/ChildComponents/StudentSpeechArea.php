<?php

namespace App\Http\Controllers\SpaFrontend\HomePage\ChildComponents;

use App\Models\Backend\AdditionalFeatureManagement\StudentOpinion\StudentOpinion;
use Livewire\Component;

class StudentSpeechArea extends Component
{
    public function render()
    {
        return view('spa-frontend.home-page.child-components.student-speech-area', [
            'studentOpinions'   => StudentOpinion::where('status', 1)->take(5)->select('id', 'show_type', 'name', 'image','comment')->get(),
        ]);
    }
}
