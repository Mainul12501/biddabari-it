<div>
    {{-- The whole world belongs to you. --}}
    <div class="row py-3">
        <div class="col-12 text-center">
            <h4 class="border-bottom">{{ $course->title ?? 'Course Title'.' '. $contentType }} </h4>
        </div>
    </div>
    @if($showAllContents == true)
        <div class="row">
            @foreach($courseSectionContents as $key => $courseSectionContent)

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 " wire:click="showContent({{ $courseSectionContent->id }}, {{ $contentType }})">
                    <a class="" href="{{ route('student.view-type-wise-content', ['contentType' => $contentType, 'slug' => str_replace(' ', '-', $courseSectionContent->title), 'contentId' => $courseSectionContent->id]) }}"  >
                        <div class="dashboard_stats_wrap">
                            @if($contentType == 'videos')
                                <div class="playlist_video">
                                    <img src="https://cdn-icons-png.freepik.com/256/1179/1179120.png" alt="video icon" style="height: 200px" class="w-100">
                                </div>
                            @elseif($contentType == 'pdfs')
                                <div class=" dashboard_pdf">
                                    <img src="{{asset('frontendAsset')}}/assets/img/pdf.jpeg"
                                         class="img-fluid rounded-start py-2" alt="...">
                                </div>
                            @elseif($contentType == 'notes')
                                <div class=" dashboard_pdf">
                                    <img src="https://png.pngtree.com/element_our/20190603/ourmid/pngtree-square-note-paper-cartoon-illustration-image_1446664.jpg"
                                         class="img-fluid rounded-start py-2" alt="...">
                                </div>
                            @elseif($contentType == 'assignments')
                                <div class=" dashboard_pdf">
                                    <img src="https://png.pngtree.com/png-vector/20190411/ourmid/pngtree-vector-assignment-icon-png-image_924510.jpg"
                                         class="img-fluid rounded-start py-2" alt="...">
                                </div>
                            @endif
                            <div class="dashboard_stats_wrap_content">
                                <h5>{{ $courseSectionContent->title }}</h5>
                            </div>
                        </div>
                    </a>
                </div>

            @endforeach
        </div>
    @elseif($showSingleContent == true)
        <div class="row">
            @if($contentType != 'assignments')
                <div class="col-sm-9">
sdfsf
                </div>
                <div class="col-sm-3">

                </div>
            @else
                <div class="col-sm-12">
xxx
                </div>
            @endif

        </div>

    @endif

</div>
