<?php

namespace App\Http\Controllers\SpaFrontend\HomePage\ChildComponents;

use App\Models\Backend\AdditionalFeatureManagement\OurTeam\OurTeam;
use Livewire\Component;

class OurInstructorArea extends Component
{
    public function render()
    {
        return view('spa-frontend.home-page.child-components.our-instructor-area', [
            'ourTeams'          => OurTeam::where(['content_show_type' => 'home_page', 'status' => 1])->select('id', 'name', 'designation', 'image','content_show_type','video_link','video_file')->get(),
        ]);
    }
}
