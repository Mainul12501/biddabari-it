<?php

namespace App\Http\Controllers\SpaFrontend\HomePage\ChildComponents;

use App\Models\Backend\Course\Course;
use Livewire\Component;

class FeaturedCoursesArea extends Component
{
    public function render()
    {
        return view('spa-frontend.home-page.child-components.featured-courses-area', [
            'featuredCourses'   => Course::where(['is_featured' => 1, 'status' => 1])->latest()->select('id', 'title', 'price', 'banner', 'total_class','total_video', 'total_note', 'slug')->with(['courseCategories' => function ($courseCategories) {
                $courseCategories->select('id', 'name')->get();
            }])->take(6)->get(),
        ]);
    }
}
