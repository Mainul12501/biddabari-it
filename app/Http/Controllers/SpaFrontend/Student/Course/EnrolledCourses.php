<?php

namespace App\Http\Controllers\SpaFrontend\Student\Course;

use App\helper\ViewHelper;
use App\Models\Backend\OrderManagement\ParentOrder;
use Livewire\Component;

class EnrolledCourses extends Component
{
    public $loggedUser, $orders = [], $type;

    public function mount($type)
    {
        $this->type = $type;
    }
    public function render()
    {
        $this->loggedUser = ViewHelper::loggedUser();
        $this->orders   = ParentOrder::where(['ordered_for' => 'course', 'user_id' => $this->loggedUser->id])->with('course')->get();
        return view('spa-frontend.student.course.enrolled-courses', [
            'orders'    => $this->orders
        ])->layout('spa-frontend.student-master');
    }
}
