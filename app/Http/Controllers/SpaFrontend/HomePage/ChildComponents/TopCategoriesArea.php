<?php

namespace App\Http\Controllers\SpaFrontend\HomePage\ChildComponents;

use App\Models\Backend\Course\CourseCategory;
use Livewire\Component;

class TopCategoriesArea extends Component
{

    public function render()
    {
        return view('spa-frontend.home-page.child-components.top-categories-area', [
            'categories'    => CourseCategory::where(['status' => 1, 'parent_id' => 0])->latest()->take(9)->select('id', 'name', 'image')->get(),
        ]);
    }
}
