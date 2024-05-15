<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

use App\Http\Controllers\SpaFrontend\HomePage\ParentPage\HomeParent;
use App\Http\Controllers\SpaFrontend\CoursePage\ParentPage\CourseParent;
use App\Http\Controllers\SpaFrontend\AboutUsPage\ParentPage\AboutUsParent;
use App\Http\Controllers\SpaFrontend\ContactPage\ParentPage\ContactParent;
use App\Http\Controllers\SpaFrontend\CourseDetailsPage\ParentPage\CourseDetailsParent;
use App\Http\Controllers\SpaFrontend\Student\StudentDashboardPage\ParentPage\StudentDashboardParent;
use App\Http\Controllers\SpaFrontend\Student\Course\CourseVideoPage\ParentPage\CourseVideoParent;
use App\Http\Controllers\SpaFrontend\Student\Course\CoursePdfPage\ParentPage\CoursePdfParent;
use App\Http\Controllers\SpaFrontend\Student\Course\CourseNotePage\ParentPage\CourseNoteParent;
use App\Http\Controllers\SpaFrontend\Student\Course\CourseAssignmentPage\ParentPage\CourseAssignmentParent;
use App\Http\Controllers\SpaFrontend\Student\Profile\ProfilePage\ParentPage\ProfileParent;
use App\Http\Controllers\SpaFrontend\Student\Course\EnrolledCourses;

Route::get('/sign-up', [FrontendController::class, 'signup'])->name('signup');
Route::get('/sign-in', [FrontendController::class, 'signin'])->name('signin');
Route::get('/forget-password', [FrontendController::class, 'forgetPassword'])->name('forget.pass');

Route::middleware('previousUrlMiddleware')->group(function (){
    Route::get('/', HomeParent::class)->name('home');
    Route::get('/it-courses', CourseParent::class)->name('all-courses');
    Route::get('/course-details/{id}/{slug?}', CourseDetailsParent::class)->name('course.details');
    Route::get('/about-us', AboutUsParent::class)->name('about.us');
    Route::get('/contact', ContactParent::class)->name('contact');
});



Route::get('/student-profile', ProfileParent::class)->name('student.profile');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'single.device'
])->group(function (){

    Route::get('/student/dashboard', StudentDashboardParent::class)->name('student.dashboard');
    Route::get('/student-profile', ProfileParent::class)->name('student.profile');

    Route::get('/courses/videos', CourseVideoParent::class)->name('courses.videos');
    Route::get('/courses/pdf', CoursePdfParent::class)->name('courses.pdfs');
    Route::get('/courses/notes', CourseNoteParent::class)->name('courses.notes');
    Route::get('/courses/assignment', CourseAssignmentParent::class)->name('courses.assignments');

    Route::get('/student/courses/{type?}', EnrolledCourses::class)->name('student.get-enrolled-courses');
});
