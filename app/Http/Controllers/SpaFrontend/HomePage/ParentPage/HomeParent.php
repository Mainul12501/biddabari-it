<?php

namespace App\Http\Controllers\SpaFrontend\HomePage\ParentPage;

use Livewire\Component;

class HomeParent extends Component
{
    public function render()
    {
        return view('spa-frontend.home-page.parent-page.home-parent')->title('Home Page');
    }
}
