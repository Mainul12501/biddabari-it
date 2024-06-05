<?php

namespace App\Http\Controllers\SpaFrontend\Checkout;

use App\helper\ViewHelper;
use App\Models\Backend\Course\Course;
use App\Models\Backend\OrderManagement\ParentOrder;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class CheckoutPage extends Component
{
    use LivewireAlert;

    public $type, $slug, $course;

    public function mount($type, $slug)
    {
        $this->type    = $type;
        $this->slug    = $slug;
        $this->course   = Course::where('slug', $slug)->select('id', 'title', 'price', 'discount_end_date_timestamp', 'discount_type', 'discount_amount')->first();
    }

    public function render()
    {
        if (auth()->check())
        {
            if ($this->type == 'course')
            {
                $existUser = ParentOrder::where(['user_id' => ViewHelper::loggedUser()->id, 'ordered_for' => 'course', 'parent_model_id' => $this->course->id])->where('status', '!=', 'canceled')->first();

            }
            if (!empty($existUser))
            {
                if (str()->contains(url()->current(), '/api/'))
                {
                    return response()->json('Sorry. You already enrolled this course.', 400);
                }
                $this->alert('error', 'Sorry. You already enrolled this course.');
                return $this->redirect((session()->has('course_redirect_url') ? session('course_redirect_url') : url()->previous()), navigate: true);
            }

        }
        if (!empty($this->course)) {
            if ($this->type == 'course') {
                if ($this->course->discount_end_date_timestamp < strtotime(currentDateTimeYmdHi())) {
                    if ($this->course->discount_type == 1) {
                        $this->course->total_amount_after_discount = $this->course->price - $this->course->discount_amount;
                    } elseif ($this->course->discount_type == 2) {
                        $this->course->total_amount_after_discount = $this->course->price - (($this->course->price * $this->course->discount_amount) / 100);
                    }
                } else {
                    $this->course->total_amount_after_discount = $this->course->price;
                }
            }
        }
        return view('spa-frontend.checkout.checkout-page', [
            'reqFor' => $this->type,
            'course' => $this->course
        ]);
    }


}
