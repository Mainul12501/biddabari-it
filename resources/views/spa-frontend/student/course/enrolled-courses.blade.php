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
                        <a href="{{ route('student.show-type-wise-contents', ['contentType' => $contentType ?? 'videos', 'slug' => $order->course->slug]) }}" wire:navigate >
                            <div class="card">
                                <img src="{{ asset(file_exists($order->course->banner) ? $order->course->banner : 'frontend/logo/biddabari-card-logo-350x210.jpg') }}" alt="" class="card-img-top" style="height: 160px" />
                                <div class="card-body">
                                    <h3 class="text-center">{{ $order->course->title ?? 'Course Name' }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
