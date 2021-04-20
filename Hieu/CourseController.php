<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function course() {
        return view('front.course.courses');
    }

    public function about() {
        return view('front.about.about');
    }

    public function contact() {
        return view('front.contact.contact');
    }
    public function faq() {
        return view('front.faq.faq');
    }
    public function entranceexam() {
        return view('front.entranceexam.entranceexam');
    }
    public function search_exam() {
        return view('front.search_exam.search_exam');
    }
}
