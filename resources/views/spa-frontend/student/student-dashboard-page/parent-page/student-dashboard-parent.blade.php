<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-3 row stu_das_mobile_res">
                    <div class="col-md-3">
                        <div class="card card-body text-center">
                            <h3 class="f-s-30">কোর্স সমূহ</h3>
                            <span class="f-s-50">{{ $totalEnrolledCourse ?? 0 }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-body text-center">
                            <h3 class="f-s-30">পেন্ডিং অর্ডার</h3>
                            <span class="f-s-50">{{ $totalPendingOrders ?? 0 }}</span>
                        </div>
                    </div>
                </div>
                <div class="mt-3 row">
                    <div class="col-md-12">
                        <div class="card  course_exam_mobile_res">
                            <div class="card-header">
                                <h3 class="text-center f-s-32">Order Lists</h3>
                            </div>
                            <div class="card-body overflow-scroll">
                                <table class="table table-striped f-s-22">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Paid Amount</th>
                                        <th>Due</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td class="custome_td">
                                                {{ $order->course->title }}
                                            </td>
                                            <td>
                                                Course
                                            </td>
                                            <td>{{ $order->total_price ?? 0 }}</td>
                                            <td>{{ $order->paid_amount ?? 0 }}</td>
                                            <td>{{ $order->total_price - $order->paid_amount ?? 0 }}</td>
                                            <td>{{ $order->status }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
