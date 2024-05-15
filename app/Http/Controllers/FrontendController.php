<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('front.home.home');
    }

    public function signup() {

        return view('front.signup');
    }
    public function signin() {
        return view('front.signin');
    }
    public function forgetPassword() {
        return view('front.forgetPassword');
    }
    public function courses() {
        return view('front.courses.courses');
    }
    public function courseDetails() {
        return view('front.courses.course_details');
    }
    public function aboutUs() {
        return view('front.pages.about');
    }
    public function contact() {
        return view('front.pages.contact');
    }
    public function studentDashboard() {
        return view('front.dashboard.student_dashboard');
    }
    public function dashboardVideos() {
        return view('front.dashboard.content.videos');
    }
    public function dashboardPDF() {
        return view('front.dashboard.content.pdf');
    }
    public function dashboardNote() {
        return view('front.dashboard.content.notes');
    }
    public function dashboardAssignment() {
        return view('front.dashboard.content.assignment');
    }
    public function studentProfile() {
        return view('front.dashboard.student_profile');
    }
}
