<?php

namespace App\Http\Controllers\SpaFrontend\HomePage\ChildComponents;

use App\Models\Backend\AdditionalFeatureManagement\OurService\OurService;
use Livewire\Component;

class OurServiceArea extends Component
{
    public function render()
    {
        return view('spa-frontend.home-page.child-components.our-service-area', [
            'ourServices'       => OurService::whereStatus(1)->select('id', 'icon_code', 'image', 'title','content')->get(),
        ]);
    }
}
