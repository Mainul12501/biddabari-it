<?php

namespace App\Http\Controllers\SpaFrontend\CoursePage\ParentPage;

use App\Models\Backend\Course\CourseCategory;
use Livewire\Component;

class CourseParent extends Component
{
    public function render()
    {
        return view('spa-frontend.course-page.parent-page.course-parent', [
            'categories'    => CourseCategory::where(['status' => 1, 'parent_id' => 0])->select('id', 'name', 'image')->get(),
        ])->title('all-courses');
    }
}
