<section class="gray">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <div class="sec-heading center">
                    <h2>শিক্ষার্থীদের  <span class="theme-cl">মতামত</span></h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-sm-12">

                <div class="reviews-slide space">

                    @foreach($studentOpinions as $studentOpinion)
                        <!-- Single Item -->
                        <div class="single_items lios_item" wire:key="{{ $studentOpinion->id }}">
                            <div class="_testimonial_wrios shadow_none">
                                <div class="_testimonial_flex">
                                    <div class="_testimonial_flex_first">
                                        <div class="_tsl_flex_thumb">
                                            <img src="{{ file_exists($studentOpinion->image) ? asset($studentOpinion->image) : asset('frontend/logo/biddabari-logo-50x50.jpg')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="_tsl_flex_capst">
                                            <h5>{{ $studentOpinion->name ?? 'Student Name' }}</h5>
                                            <div class="_ovr_posts"><span>Student</span></div>
{{--                                            <div class="_ovr_rates"><span><i class="fa fa-star"></i></span>4.7</div>--}}
                                        </div>
                                    </div>
{{--                                    <div class="_testimonial_flex_first_last">--}}
{{--                                        <div class="_tsl_flex_thumb">--}}
{{--                                            <img src="{{asset('frontendAsset')}}/assets/img/c-1.png" class="img-fluid" alt="">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>

                                <div class="facts-detail">
                                    {!! $studentOpinion->comment !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
