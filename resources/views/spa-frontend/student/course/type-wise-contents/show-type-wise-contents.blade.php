<div>
    {{-- The whole world belongs to you. --}}
    <div class="row py-3">
        <div class="col-12 text-center">
            <h4 class="border-bottom">{{ $course->title ?? 'Course Title'.' '. $contentType }} </h4>
        </div>
    </div>
    <div class="row">
        @foreach($courseSectionContents as $key => $courseSectionContent)
            @if($contentType == 'videos')
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="dashboard_stats_wrap">
                        <div class="playlist_video">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/NjqjVdVJX1g?si=tTlVUhw_Wgk8b1J6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="dashboard_stats_wrap_content">
                            <h5>{{ $courseSectionContent->title }}</h5>
                        </div>
                    </div>
                </div>
            @elseif($contentType == 'pdfs')
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="dashboard_stats_wrap">
                        <div class=" dashboard_pdf">
                            <img src="{{asset('frontendAsset')}}/assets/img/pdf.jpeg"
                                 class="img-fluid rounded-start py-2" alt="...">
                        </div>
                        <div class="dashboard_stats_wrap_content">
                            <h5>{{ $courseSectionContent->title }}</h5>
                        </div>
                    </div>
                </div>
            @elseif($contentType == 'notes')
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="dashboard_stats_wrap">
                        <div class=" dashboard_pdf">
                            <img src="https://png.pngtree.com/element_our/20190603/ourmid/pngtree-square-note-paper-cartoon-illustration-image_1446664.jpg"
                                 class="img-fluid rounded-start py-2" alt="...">
                        </div>
                        <div class="dashboard_stats_wrap_content">
                            <h5>{{ $courseSectionContent->title }}</h5>
                        </div>
                    </div>
                </div>
            @elseif($contentType == 'assignments')
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="dashboard_stats_wrap">
                        <div class=" dashboard_pdf">
                            <img src="https://png.pngtree.com/png-vector/20190411/ourmid/pngtree-vector-assignment-icon-png-image_924510.jpg"
                                 class="img-fluid rounded-start py-2" alt="...">
                        </div>
                        <div class="dashboard_stats_wrap_content">
                            <h5>{{ $courseSectionContent->title }}</h5>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach




    </div>
</div>
