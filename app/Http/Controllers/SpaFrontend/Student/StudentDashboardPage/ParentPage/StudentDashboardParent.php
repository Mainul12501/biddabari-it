<?php

namespace App\Http\Controllers\SpaFrontend\Student\StudentDashboardPage\ParentPage;

use App\Models\Backend\OrderManagement\ParentOrder;
use Livewire\Component;

class StudentDashboardParent extends Component
{
    public $orders, $data = [];
    public function render()
    {
        $this->orders = ParentOrder::where('user_id',auth()->id())->latest()->with('course')->get();
        $totalEnrolledCourse = 0;
//        $totalEnrolledExams = 0;
//        $totalPurchasedProducts = 0;
        $totalPendingOrders = 0;
        foreach ($this->orders as $order)
        {
            if ($order->ordered_for == 'course' && $order->status == 'approved')
            {
                $totalEnrolledCourse++;
            }
//            if ($order->ordered_for == 'batch_exam' && $order->status == 'approved')
//            {
//                $totalEnrolledExams++;
//            }
//            if ($order->ordered_for == 'product' && $order->status == 'approved')
//            {
//                $totalPurchasedProducts++;
//            }
            if ($order->status == 'pending')
            {
                $totalPendingOrders++;
            }
        }
        $this->data = [
            'orders'    => $this->orders,
            'totalEnrolledCourse'    => $totalEnrolledCourse,
//            'totalEnrolledExams'    => $totalEnrolledExams,
//            'totalPurchasedProducts'    => $totalPurchasedProducts,
            'totalPendingOrders'    => $totalPendingOrders,
        ];
        return view('spa-frontend.student.student-dashboard-page.parent-page.student-dashboard-parent', $this->data)->layout('spa-frontend.student-master');
    }
}
