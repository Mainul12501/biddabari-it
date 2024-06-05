<?php

namespace App\Http\Controllers\SpaFrontend\Student\Course\ContentDetails;

use Livewire\Component;

class ContentDetails extends Component
{
    public $contentType, $contentId, $slug = null;

    public function mount($contentType, $contentId, $slug = null)
    {
        $this->contentType  = $contentType;
        $this->contentId  = $contentId;
        $this->slug = $slug;
    }

    public function render()
    {
        return view('spa-frontend.student.course.content-details.content-details');
    }
}
