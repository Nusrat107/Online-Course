<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function aboutUs(){
        return view('frontend.about-us');
    }

    public function admission(){
        return view('frontend.admission');
    }

    public function awards(){
        return view('frontend.awards');
    }

    public function seminar(){
        return view('frontend.seminar');
    }

    public function allCourses(){
        return view('frontend.all-courses');
    }

    public function events(){
        return view('frontend.events');
    }

    public function students(){
        return view('frontend.students');
    }

    public function contactUs(){
        return view('frontend.contact-us');
    }

    public function courseDetails(){
        return view('frontend.course-details');
    }

    public function dbProfile(){
        return view('frontend.db-profile');
    }

    public function dbCourses(){
        return view('frontend.db-courses');
    }

    public function dbExams(){
        return view('frontend.db-exams');
    }

    public function dbTimeLine(){
        return view('frontend.db-time-line');
    }

    public function eventDetails(){
        return view('frontend.event-details');
    }
    
    public function eventRegister(){
        return view('frontend.event-register');
    }

    public function research(){
        return view('frontend.research');
    }
}
