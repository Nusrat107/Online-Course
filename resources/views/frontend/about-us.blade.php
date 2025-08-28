@extends('frontend.master')

@section('content')
  <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        <a href="index-2.html"><img src="{{asset('frontend/images/logo.png')}}" alt="" />
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

        <!--SECTION START-->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>About <span> Academy</span></h2>
                            <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                        </div>
                    </div>
                    <div class="ed-about-sec1">
                        <div class="ed-advan">
                            <ul>
                                <li>
                                    <div class="ed-ad-img">
                                        <img src="{{asset('frontend/images/adv/1.png')}}" alt="">
                                    </div>
                                    <div class="ed-ad-dec">
                                        <h4>Awards</h4>
                                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi bibendum imperdiet bibendum.</p>
                                        <a href="awards.html">Read more</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="ed-ad-img">
                                        <img src="{{asset('frontend/images/adv/2.png')}}" alt="">
                                    </div>
                                    <div class="ed-ad-dec">
                                        <h4>Research</h4>
                                        <p>tiam eget enim non magna vestibulum malesuada ut et lectus. Curabitur egestas risus massa, a malesuada erat ultrices non.</p>
                                        <a href="research.html">Read more</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="ed-ad-img">
                                        <img src="{{asset('frontend/images/adv/3.png')}}" alt="">
                                    </div>
                                    <div class="ed-ad-dec">
                                        <h4>Educations</h4>
                                        <p>Maecenas venenatis, turpis ac tincidunt convallis, leo enim ultrices tortor, at faucibus neque sapien ac elit. Curabitur ut ipsum odio.</p>
                                        <a href="all-courses.html">Read more</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="ed-ad-img">
                                        <img src="{{asset('frontend/images/adv/4.png')}}" alt="">
                                    </div>
                                    <div class="ed-ad-dec">
                                        <h4>Alumni</h4>
                                        <p>Aliquam malesuada commodo lectus, at fermentum ligula finibus eu. Morbi nisi neque, suscipit non pulvinar vitae.</p>
                                        <a href="awards.html">Read more</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="ed-ad-img">
                                        <img src="{{asset('frontend/images/adv/5.png')}}" alt="">
                                    </div>
                                    <div class="ed-ad-dec">
                                        <h4>Facilities</h4>
                                        <p>Maecenas venenatis, turpis ac tincidunt convallis, leo enim ultrices tortor, at faucibus neque sapien ac elit. Curabitur ut ipsum odio.</p>
                                        <a href="facilities.html">Read more</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="ed-ad-img">
                                        <img src="{{asset('frontend/images/adv/6.png')}}" alt="">
                                    </div>
                                    <div class="ed-ad-dec">
                                        <h4>Departments</h4>
                                        <p>Maecenas venenatis, turpis ac tincidunt convallis, leo enim ultrices tortor, at faucibus neque sapien ac elit. Curabitur ut ipsum odio.</p>
                                        <a href="departments.html">Read more</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="ed-about-sec1">
                        <div class="col-md-6"></div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->

    
@endsection