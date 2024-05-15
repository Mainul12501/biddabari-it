<div>
    {{-- Be like water. --}}
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">All Courses</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb p-0 bg-white">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}" wire:navigate>Home</a></li>
                                <li class="breadcrumb-item active theme-cl" aria-current="page">Courses</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->
    <section class="min">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 text-center">
                    <div class="sec-heading center mb-4">
                        <h2>Explore  <span class="theme-cl">Categories</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($categories as $category)
                    <livewire:course-page.child-components.categories-area :key="$category->id" :$category />
                @endforeach
            </div>
        </div>
    </section>
    <!-- ============================ Course Detail ================================== -->
    <section class="gray">
        <div class="container">
            <livewire:course-page.child-components.courses-area />
        </div>
    </section>
    <!-- ============================ Course Detail ================================== -->
</div>
