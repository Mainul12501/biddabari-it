<?php

namespace App\Http\Controllers\SpaFrontend\Student\Course\TypeWiseContents;

use App\Models\Backend\Course\Course;
use App\Models\Backend\Course\CourseSectionContent;
use Livewire\Component;

class ShowTypeWiseContents extends Component
{
    public $contentType, $slug, $course, $courseSectionContents = [];

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
}
