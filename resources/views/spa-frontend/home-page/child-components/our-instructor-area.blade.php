<section class="min">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                <div class="sec-heading center mb-4">
                    <h2>শ্রদ্ধেয় <span class="theme-cl">শিক্ষকবৃন্দ</span></h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="tutor-slide">

                    @foreach($ourTeams as $ourTeam)
                        <!-- Single Item -->
                        <div class="lios_item" wire:key="{{ $ourTeam->id }}">
                            <div class="crs_trt_grid shadow_none brd">
                                <div class="crs_trt_thumb">
                                    <a href="javascript:void(0)" class="crs_trt_thum_link"><img src="{{ file_exists($ourTeam->image) ? asset($ourTeam->image) : asset('frontend/logo/biddabari-card-logo-350x210.jpg')}}" class="img-fluid" alt="" /></a>
                                </div>
                                <div class="crs_trt_caption large">
                                    <div class="instructor_tag"><span>{{ $ourTeam->designation ?? 'Teacher designation' }}</span></div>
                                    <div class="instructor_title"><h4><a href="javascript:void(0)">{{ $ourTeam->name ?? 'Teacher Name' }}</a></h4></div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</section>
