<section class="min">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                <div class="sec-heading center mb-4">
                    <h2>Explore Top <span class="theme-cl">Categories</span></h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($categories as $category)
                <div class="col-lg-4 col-md-4 col-sm-6" wire:key="{{ $category->id }}">
                    <div class="edu_cat_2 cat-1">
                        <div class="edu_cat_icons">
                            <a class="pic-main" href="#"><img src="{{ file_exists(asset($category->image)) ? asset($category->image) : asset('frontend/logo/biddabari-logo-50x50.jpg') }}" class="img-fluid" alt="" /></a>
                        </div>
                        <div class="edu_cat_data">
                            <h4 class="title"><a href="#">{{ $category->name }}</a></h4>
                            <ul class="meta">
                                <li class="video"><i class="ti-video-clapper"></i>{{ count($category->courses) }} Courses</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
