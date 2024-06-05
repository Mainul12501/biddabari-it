<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <p class="f-s-22">{{ $content->title ?? 'title' }}</p>
                </div>
                <div class="card-body p-0">
                    @if($contentType == 'videos')
                        @if($content->video_vendor == 'private')
                        <div class="private d-none">
                            <video class="w-100 video" height="500" controls="controls" controlist="nodownload">
                                <source id="privatVid" src="//samplelib.com/lib/preview/mp4/sample-5s.mp4" type="video/mp4">
                            </video>
                        </div>
                        @elseif($content->video_vendor == 'youtube')
                        <div class="youtube d-none">
                            <div class="video-container video_mobile_res" >
                                <div class="video-foreground">

                                    <div id="video"></div>
                                </div>
                            </div>


                        </div>
                        @elseif($content->video_vendor == 'vimeo')
                        <div class="vimeo d-none">
                            <div style="padding:56.25% 0 0 0;position:relative;">
                                <iframe id="vimeoPlayer" src="" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        @else
                        <div class="mt-4">
                            <div id="videoCommentDiv">

                            </div>
                        </div>
                        @endif
                    @elseif($contentType = 'notes')
                        <div>
                            {!! $content->note_content !!}
                        </div>
                    @elseif($contentType = 'pdfs')
                        <div>
                            <div class=" p-0" id="pdfContentPrintDiv">
                                <div class="row">
                                    <div class="col-12">
                                        <p>
                                            <a href="" class="float-end" download id="pdfDownloadLink"></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="my-box px-3 mx-auto mt-5" >
                                    <div id="pdf-container"></div>
                                </div>
                            </div>
                        </div>
                    @elseif($contentType = 'pdfs')
                        <div>
                            <div class="mt-3">
                                <p>Done Your assignment? Submit Your Answers Now</p>
                                <form action="{{ route('front.student.upload-assignment-files') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="course_content_id" value="{{ $content->id }}">
                                    <div class="row">
                                        <label for="">Upload Files</label>
                                        <input type="file" name="files[]" class="float-start" multiple accept="image/*" />
                                    </div>
                                    <input type="submit" class="btn btn-success float-start mt-3 btn-sm" value="Upload"/>
                                </form>
                            </div>
                            @endif
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@script
<style>
    .mcq-xm th {font-size: 24px}
    .mcq-xm td {font-size: 22px}
    .written-xm th {font-size: 24px}
    .written-xm td {font-size: 22px}
</style>

<link rel="stylesheet" href="{{ asset('/') }}backend/ppdf/css/pdfviewer.jquery.css" />
<style>
    .pdf-toolbar {display: none;}
    #pdf-container {overflow: scroll; height: 500px;}
    .aks-video-player { width: 99%!important;}
</style>

<style>
    .my-box { width: 100%!important;}
    .canvas-container, canvas {
        width: 100%!important;
        margin-top: 10px!important;
        height:auto;

        /* .my-box { width: 100%!important;} */
        /*.canvas-container, canvas { */
        /* width: 100%!important; */
        /*     margin-top: 10px!important;}*/
        /*    @media screen and (max-width: 768px){*/
        /*    #pdfContentPrintDiv {overflow: scroll;}*/
        /*}*/


    }
    /*.canvas{*/
    /*     overflow:scroll !important;*/
    /*}*/

    .video-container{
        width:100%!important;
        height: 440px;
        overflow:hidden;
        position:relative;


        padding-bottom: 56.25%;
        padding-top: 25px;
        /*height: 0;*/
    }
    .video-container iframe{
        position: absolute;
        top: -60px;
        left: 0;
        width: 100%;
        /*height: calc(80% + 100px);*/
        height: 500px!important;
    }
    .video-foreground{
        pointer-events:auto;
    }
    #watchOnYoutubeWaterMark {
        height: 47px;
        width: 173px;
        background-color: transparent;
        position: absolute;
        bottom: 8%;
        left: 0;
    }
    #rightSideYoutubeWaterMark {
        height: 36px;
        width: 67px;
        background-color: transparent;
        position: absolute;
        right: 6%;
        bottom: 7%;
    }
</style>
<style>
    /*review section*/
    .no-pad p {
        margin-bottom: 2px!important;
    }
    .comment-user-image {
        border-radius: 60%;
        width: 40px;
        height: 40px;
    }
    .com-img-box {
        /*height: 78px;*/
        width: 56px;
    }
    .main-comment p {
        margin-bottom: 2px!important;
    }
    .sub-replay p {
        margin-bottom: 2px !important;
    }
    .bb-1px {
        border-bottom: 1px solid black;
    }

    .ytp-impression-link {
        display: none !important;
    }


</style>

<link type="text/css" rel="stylesheet" href="https://unpkg.com/aksvideoplayer@1.0.0/dist/aksVideoPlayer.min.css">


{{--vimeo video js--}}
<script src="https://player.vimeo.com/api/player.js"></script>

{{--aks video player--}}
<script src="https://unpkg.com/aksvideoplayer@1.0.0/dist/aksVideoPlayer.min.js"></script>
<script>
    $("#video").empty().aksVideoPlayer({
        file: [
            {
                file: videoUrl,
                label: "1080p"
            },
            {
                file: videoUrl,
                label: "720p"
            },
            {
                file: videoUrl,
                label: "540p"
            },
            {
                file: videoUrl,
                label: "360p"
            },
            {
                file: videoUrl,
                label: "240p"
            }
        ],
        // width: $(this).parent().height(),
        height: $(this).parent().width(),
        poster: "",
    });
</script>
@endscript
