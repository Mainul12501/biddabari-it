<?php

namespace App\Http\Controllers\SpaFrontend\CourseDetailsPage\ParentPage;

use App\helper\ViewHelper;
use App\Http\Controllers\SpaFrontend\HomePage\ParentPage\HomeParent;
use App\Http\Controllers\SpaFrontend\Student\StudentDashboardPage\ParentPage\StudentDashboardParent;
use App\Models\Backend\AdditionalFeatureManagement\Affiliation\AffiliationHistory;
use App\Models\Backend\AdditionalFeatureManagement\Affiliation\AffiliationRegistration;
use App\Models\Backend\Course\Course;
use App\Models\Backend\Course\CourseCoupon;
use App\Models\Backend\OrderManagement\ParentOrder;
use App\Models\Frontend\AdditionalFeature\ContactMessage;
use DGvai\SSLCommerz\SSLCommerz;
use Illuminate\Support\Facades\Session;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use function Laravel\Prompts\alert;

class CourseDetailsParent extends Component
{
    use LivewireAlert;

    public $courseId, $course, $comments = [], $data = [];

    public $course_id, $total_amount, $used_coupon, $coupon_code, $coupon_amount, $ordered_for = 'course', $rc = '', $paid_to, $paid_from, $txt_id, $vendor;
    public $payment_method = 'cod';

    public function mount($id, $slug = null)
    {
        $this->courseId = $id;
        $this->course   = Course::find($id);
    }

    public function render()
    {
        $this->course = Course::whereId($this->courseId)->with([
            'teachers'   => function($teachers) {
                $teachers->select('id', 'user_id', 'subject', 'first_name', 'last_name', 'description', 'image')->with(['user' => function($user){
//                    $user->select('id', 'name', 'email')->first();
                }])->get();
            },
//            'courseSections' => function($courseSections) {
//                $courseSections->whereStatus(1)->with('courseSectionContents')->get()->except(['created_at', 'updated_at']);
//            },
            'courseRoutines'    => function($courseRoutines) {
                $courseRoutines->whereStatus(1)->get();
            },
            'courseCategories'  => function($courseCategories) {
                $courseCategories->select('id', 'name')->get();
            }
        ])->first();
        if (isset($this->course))
        {
            $this->comments = ContactMessage::where(['status' => 1, 'type' => 'course', 'parent_model_id' => $this->course->id, 'is_seen' => 1])->get();
        }
        $courseEnrollStatus = ViewHelper::checkIfCourseIsEnrolled($this->course);

        $this->data = [
            'course' => $this->course,
            'courseEnrollStatus' => $courseEnrollStatus,
            'comments'  => $this->comments,
        ];

        return view('spa-frontend.course-details-page.parent-page.course-details-parent', $this->data);
    }



    public function placeCourseOrder($orderCourseId, $ordered_for = 'course', $total_amount = 0, $used_coupon = 0, $coupon_code = '', $coupon_amount = 0)
    {
        try {
            $request    = [];
            if (auth()->check())
            {
//                if (isset($request->rc))
//                {
//                    $existAffiliateUser = AffiliationRegistration::where('user_id', ViewHelper::loggedUser()->id)->first();
//                    if (isset($existAffiliateUser) && $existAffiliateUser->affiliate_code == $request->rc)
//                    {
//                        return ViewHelper::returEexceptionError('You can not use your own referral code.');
//                    }
//                }
                $existUser = ParentOrder::where(['user_id' => ViewHelper::loggedUser()->id, 'ordered_for' => 'course', 'parent_model_id' => $orderCourseId])->first();
                if (!empty($existUser))
                {
//                    \session()->flash('error', 'Sorry. You already enrolled this course.');
                    $this->alert('warning', 'Sorry. You already enrolled this course.');
                }

                $this->course   = Course::find($orderCourseId);

//                $request['_token'] = csrf_token();
                $request['course_id'] = $orderCourseId;
                $request['total_amount'] = $total_amount;
                $request['used_coupon'] = $used_coupon;
                $request['coupon_code'] = $coupon_code;
                $request['coupon_amount'] = $coupon_amount;
                $request['ordered_for'] = $ordered_for;
//                $request['rc'] = $this->rc;
                $request['details_url'] = route('course.details', ['id' => $orderCourseId]);
                $request['model_name'] = 'course';
                $request['model_id'] = $orderCourseId;
                $request['payment_method'] = $this->payment_method;
                $request['paid_to'] = $this->paid_to;
                $request['paid_from'] = $this->paid_from;
                $request['txt_id'] = $this->txt_id;
                $request['vendor'] = $this->vendor;
//                $request['affiliate_amount'] = $this->course->affiliate_amount;

                if (isset($coupon_code))
                {
                    $courseCoupon = CourseCoupon::where(['code' => $coupon_code, 'course_id' => $orderCourseId])->first();
                    if (!empty($courseCoupon))
                    {
                        $request['total_amount']  = $total_amount - $courseCoupon->discount_amount;
                    }
                }


                if ($this->payment_method == 'ssl')
                {

                    \session()->put('requestData', $request);

                    return self::sendOrderRequestToSSLZ($request['total_amount'], $this->course->title);
                } elseif ($this->payment_method == 'cod')
                {
                    $this->validate( [
                        'vendor'    => 'required',
                        'paid_to'   => ['required', 'regex:/^(?:\+88|88)?(01[3-9]\d{8})$/'],
                        'paid_from' => ['required', 'regex:/^(?:\+88|88)?(01[3-9]\d{8})$/'],
                        'txt_id'    => 'required',
                    ]);

                    $order = ParentOrder::storeXmOrderInfoForSPA($request, $orderCourseId);
//                    if (isset($request->rc))
//                    {
//                        AffiliationHistory::createNewHistory($request, 'course', $request->course_id, Course::find($request->course_id)->affiliate_amount, 'insert');
//                    }
//                    \session()->flash('success', 'You Ordered the course successfully.');
                    $this->alert('success', 'You Ordered the course successfully.');
                    $this->redirect(StudentDashboardParent::class, navigate: true);
                }


            } else {
                $this->alert('warning', 'Please Login First');
            }
        } catch (\Exception $exception)
        {
            $this->alert('error', $exception->getMessage());
        }
    }

    public static function sendOrderRequestToSSLZ($totalAmount, $contentName)
    {
        // return $totalAmount.'-----'.$contentName;
        $sslc = new SSLCommerz();
        $sslc->amount($totalAmount)
            ->trxid(ParentOrder::generateOrderNumber())
            ->product($contentName)
            ->customer(ViewHelper::loggedUser()->name, ViewHelper::loggedUser()->email ?? 'user@demo.com', ViewHelper::loggedUser()->mobile);
        return $sslc->make_payment();
    }
}
