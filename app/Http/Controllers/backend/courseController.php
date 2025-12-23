<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class courseController extends Controller
{
     public function allCourse()
  {
    return view('backend.Course.all-course');
  }





     public function courseDetails()
  {
    return view('backend.Course.course-details');
  }
}
