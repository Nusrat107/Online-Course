@extends('frontend.master')

@section('content')

    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        <a href="{{url('/')}}"><img src="{{asset('frontend/images/logo.png')}}" alt="" />
						</a>
                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                            <h4>All Courses</h4>
                            <ul>
                                <li><a href="{{url('/course-details')}}">Accounting/Finance</a></li>
                                <li><a href="{{url('/course-details')}}">civil engineering</a></li>
                                <li><a href="{{url('/course-details')}}">Art/Design</a></li>
                                <li><a href="{{url('/course-details')}}">Marine Engineering</a></li>
                                <li><a href="{{url('/course-details')}}">Business Management</a></li>
                                <li><a href="{{url('/course-details')}}">Journalism/Writing</a></li>
                                <li><a href="{{url('/course-details')}}">Physical Education</a></li>
                                <li><a href="{{url('/course-details')}}">Political Science</a></li>
                                <li><a href="{{url('/course-details')}}">Sciences</a></li>
                                <li><a href="{{url('/course-details')}}">Statistics</a></li>
                                <li><a href="{{url('/course-details')}}">Web Design/Development</a></li>
                                <li><a href="{{url('/course-details')}}">SEO</a></li>
                                <li><a href="{{url('/course-details')}}">Google Business</a></li>
                                <li><a href="{{url('/course-details')}}">Graphics Design</a></li>
                                <li><a href="{{url('/course-details')}}">Networking Courses</a></li>
                                <li><a href="{{url('/course-details')}}">Information technology</a></li>
                            </ul>
                            <h4>User Account</h4>
                            <ul>
                                <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a></li>
                                <li><a href="#!" data-toggle="modal" data-target="#modal2">Register</a></li>
                            </ul>
                            <h4>All Pages</h4>
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('about-us')}}">About us</a></li>
                                <li><a href="{{url('admission')}}">Admission</a></li>
                                <li><a href="{{url('/all-courses')}}">All courses</a></li>
                                <li><a href="{{url('/course-details')}}">Course details</a></li>
                                <li><a href="{{url('/awards')}}">Awards</a></li>
                                <li><a href="{{url('/seminar')}}">Seminar</a></li>
                                <li><a href="{{url('/events')}}">Events</a></li>
                                <li><a href="{{url('/event-details')}}">Event details</a></li>
                                <li><a href="{{url('/event-register')}}">Event register</a></li>
                                <li><a href="{{url('/contact-us')}}">Contact us</a></li>
                            </ul>
                            <h4>User Profile</h4>
                            <ul>
                               <li><a href="{{url('/students')}}">User profile</a></li>
                        <li><a href="{{url('/db-profile')}}">Profile</a></li>
                         <li><a href="{{url('/db-courses')}}">Courses</a></li>
                        <li><a href="{{url('/db-exams')}}">Exams</a></li>
                         <li><a href="{{url('/db-time-line')}}">Time line</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>All <span>Courses</span></h2>
                    <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="{{asset('frontend/images/course/sm-1.jpg')}}" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="{{url('/course-details')}}">
                                    <h3>Aerospace Engineering</h3>
                                </a>
                                <h4>Technology / Space / Aerospace</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-eye" aria-hidden="true"></i>10 Aavailable</a> </li>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="{{asset('frontend/images/course/sm-2.jpg')}}" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="{{url('/course-details')}}">
                                    <h3>Agriculture Courses</h3>
                                </a>
                                <h4>Technology / Space / Aerospace</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-eye" aria-hidden="true"></i>40 Aavailable</a> </li>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-share-alt" aria-hidden="true"></i> 320</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="{{asset('frontend/images/course/sm-3.jpg')}}" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="{{url('/course-details')}}">
                                    <h3>Marine Engineering</h3>
                                </a>
                                <h4>Technology / Ocean / Marine</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-eye" aria-hidden="true"></i>04 Aavailable</a> </li>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-share-alt" aria-hidden="true"></i> 1020</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="{{asset('frontend/images/course/sm-4.jpg')}}" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="{{url('/course-details')}}">
                                    <h3>Building, Construction Management</h3>
                                </a>
                                <h4>Technology / Construction / Building</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-eye" aria-hidden="true"></i>32 Aavailable</a> </li>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-share-alt" aria-hidden="true"></i> 124</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="{{asset('frontend/images/course/sm-5.jpg')}}" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="{{url('/course-details')}}">
                                    <h3>Fashion Technology</h3>
                                </a>
                                <h4>Technology / Trends / Fashion</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-eye" aria-hidden="true"></i>10 Aavailable</a> </li>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="{{asset('frontend/images/course/sm-6.jpg')}}" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="{{url('/course-details')}}">
                                    <h3>Agriculture Courses</h3>
                                </a>
                                <h4>Technology / Space / Aerospace</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-eye" aria-hidden="true"></i>40 Aavailable</a> </li>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-share-alt" aria-hidden="true"></i> 320</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="{{asset('frontend/images/course/sm-7.jpg')}}" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="{{url('/course-details')}}">
                                    <h3>Marine Engineering</h3>
                                </a>
                                <h4>Technology / Ocean / Marine</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-eye" aria-hidden="true"></i>04 Aavailable</a> </li>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-share-alt" aria-hidden="true"></i> 1020</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="{{asset('frontend/images/course/sm-8.jpg')}}" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="{{url('/course-details')}}">
                                    <h3>Building, Construction Management</h3>
                                </a>
                                <h4>Technology / Construction / Building</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-eye" aria-hidden="true"></i>32 Aavailable</a> </li>
                                        <li><a href="{{url('/course-details')}}"><i class="fa fa-share-alt" aria-hidden="true"></i> 124</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection