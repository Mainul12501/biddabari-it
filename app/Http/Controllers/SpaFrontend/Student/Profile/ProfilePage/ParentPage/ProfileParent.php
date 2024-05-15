<?php

namespace App\Http\Controllers\SpaFrontend\Student\Profile\ProfilePage\ParentPage;

use Livewire\Component;

class ProfileParent extends Component
{
    public function render()
    {
        return view('spa-frontend.student.profile.profile-page.parent-page.profile-parent')->layout('spa-frontend.student-master');
    }
}
