<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function about()
  {
    return view('backend.about-us.about');
  }


  public function aboutList()
  {
    return view('backend.about-us.about-list');
  }
}
