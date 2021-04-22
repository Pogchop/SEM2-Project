<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Exam_result;
use App\Models\Teacher;
use App\Models\Visitor;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isFalse;

class CourseController extends Controller
{
    //
    public function course() {
        return view('front.course.courses');
    }

    public function about() {
        $teachers = Teacher::all();


        return view('front.about.about', compact('teachers'));
    }

    public function contact() {
        return view('front.contact.contact');
    }
    public function faq() {
        return view('front.faq.faq');
    }
    public function entrance_exam() {
        return view('front.entrance_exam.entrance_exam');
    }
    public function search_exam(Request $request) {
        $search = $request->search;

        $entrance_exam_results = Visitor::where('id','LIKE', '%' . $search . '%')
            ->get()->first();


        return view('front.entrance_exam.search_exam',compact('entrance_exam_results'));
    }

}
