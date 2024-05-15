<?php

namespace App\Http\Controllers\SpaFrontend\CoursePage\ChildComponents;

use Livewire\Component;

class CategoriesArea extends Component
{
    public $key, $category;
    public function render()
    {
        return view('spa-frontend.course-page.child-components.categories-area', [
            'category'  => $this->category,
            'key'   => $this->key
        ]);
    }
}
