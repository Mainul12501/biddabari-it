<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-center">Enrolled Courses</h2>
            </div>
            <div class="row mt-5">
                @foreach($orders as $key => $order)
                    <div class="col-md-4 col-sm-6">
                        <div class="card">
                            <img src="" alt="" class="card-img-top" style="height: 100px" />
                            <div class="card-body">
                                <h3 class="text-center">Course Name</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
