<?php

namespace App\Http\Controllers\SpaFrontend\Student\Course\TypeWiseContents;

use App\Models\Backend\Course\Course;
use App\Models\Backend\Course\CourseSectionContent;
use GuzzleHttp\Client;
use Livewire\Component;

class ShowTypeWiseContents extends Component
{
    public $contentType, $slug, $course, $courseSectionContents = [], $courseSectionContent;

    public function mount($contentType,$slug)
    {
        $this->contentType  = $contentType;
//        $this->slug  = $slug;
        $this->course   = Course::where('slug', $this->slug)->select('id', 'title')->first();
    }

    public function render()
    {
        if ($this->contentType == 'videos')
        {
            $this->courseSectionContents    = $this->course->courseSectionContents()->where('content_type', 'video')->where('course_section_contents.status', 1)->select('course_section_contents.id', 'course_section_id', 'parent_id', 'course_section_contents.title', 'content_type', 'video_link', 'video_vendor')->get();
        } elseif ($this->contentType == 'pdfs')
        {
            $this->courseSectionContents    = $this->course->courseSectionContents()->where('content_type', 'pdf')->where('course_section_contents.status', 1)->select('course_section_contents.id', 'course_section_id', 'parent_id', 'course_section_contents.title', 'content_type', 'pdf_link', 'pdf_file')->get();
        } elseif ($this->contentType == 'notes')
        {
            $this->courseSectionContents    = $this->course->courseSectionContents()->where('content_type', 'note')->where('course_section_contents.status', 1)->select('course_section_contents.id', 'course_section_id', 'parent_id', 'course_section_contents.title', 'content_type', 'note_content')->get();
        } elseif ($this->contentType == 'assignments')
        {
            $this->courseSectionContents    = $this->course->courseSectionContents()->where('content_type', 'assignment')->where('course_section_contents.status', 1)->select('course_section_contents.id', 'course_section_id', 'parent_id', 'course_section_contents.title', 'content_type', 'assignment_question', 'assignment_instruction', 'assignment_total_mark', 'assignment_pass_mark', 'assignment_start_time', 'assignment_start_time_timestamp', 'assignment_end_time', 'assignment_end_time_timestamp', 'assignment_result_publish_time', 'assignment_result_publish_time_timestamp')->get();
        }
        return view('spa-frontend.student.course.type-wise-contents.show-type-wise-contents', [
            'contentType'   => $this->contentType,
//            'courseSectionContents' => CourseSectionContent::where(['status' => 1, 'content_type' => $this->contentType, ''])
            'courseSectionContents' => $this->courseSectionContents,
            'course'    => $this->course
        ])->layout('spa-frontend.student-master');
    }

    public $showAllContents = true, $showSingleContent = false, $showVideo = false, $showPdf = false, $showNote = false,$showAssignment = false;

    public function showContent($contentId, $contentType)
    {
        $this->courseSectionContent = CourseSectionContent::query()->where('id', $contentId);
        if ($contentType == 'videos')
        {
            $this->showVideo    = true;
            $this->courseSectionContent = $this->courseSectionContent->select('id', 'course_section_id', 'title', 'video_link', 'video_vendor');
        } elseif ($contentType == 'pdfs')
        {
            $this->showPdf    = true;
            $this->courseSectionContent = $this->courseSectionContent->select('id', 'course_section_id', 'title', 'pdf_link', 'pdf_file');
        } elseif ($contentType == 'notes')
        {
            $this->showNote    = true;
            $this->courseSectionContent = $this->courseSectionContent->select('id', 'course_section_id', 'title', 'note_content');
        } elseif ($contentType == 'assignments')
        {
            $this->showAssignment    = true;
            $this->courseSectionContent = $this->courseSectionContent->select('id', 'course_section_id', 'title',  'assignment_question', 'assignment_instruction', 'assignment_total_mark', 'assignment_pass_mark', 'assignment_start_time', 'assignment_start_time_timestamp', 'assignment_end_time', 'assignment_end_time_timestamp', 'assignment_result_publish_time', 'assignment_result_publish_time_timestamp');
        }
        $this->courseSectionContent = $this->courseSectionContent->first();
        if ($this->contentType == 'video')
        {
            if ($this->courseSectionContent->video_vendor == 'youtube')
            {
                $videoLink = $this->courseSectionContent->video_vendor == 'youtube' ? explode('https://www.youtube.com/watch?v=', $this->courseSectionContent->video_link)[1] : $this->courseSectionContent->video_link;
                $client = new Client();

                $body = $client->request('GET', 'https://ytstream-download-youtube-videos.p.rapidapi.com/dl?id='.$videoLink, [
                    'headers'   => [
                        "X-RapidAPI-Host" => "ytstream-download-youtube-videos.p.rapidapi.com",
                        "X-RapidAPI-Key" => "1060b8398cmsh0fa736b29e6e50ep11b5aajsn1e379b06e042"
                    ]
                ]);
                $getBody    = $client->getBody()->getContents();
                if ($getBody->status == 'ok' && $getBody->id == $videoLink)
                {
                    foreach ($getBody->formats as $key => $format) {
                        if ($format->itag == "22")
                        {
                            $this->courseSectionContent['yt_vid_link']  = $format->url;
                        }
                    }
                }
            }


        }
        $this->showSingleContent = true;
        $this->showAllContents =    false;
    }
}
