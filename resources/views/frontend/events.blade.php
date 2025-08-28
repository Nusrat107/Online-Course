@extends('frontend.master')

@section('content')
 <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        <a href="index-2.html"><img src="images/logo.png" alt="" />
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
                                <li><a href="{{url('/course-details')}}">Home</a></li>
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
        <div class="container com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>College <span> Events</span></h2>
                            <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                        </div>
                        <div>
                            <div class="ho-event pg-eve-main">
                                <ul>
                                    <li>
                                        <div class="ho-ev-date pg-eve-date"><span>07</span><span>jan,2018</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a href="{{url('/event-register')}}">
                                                <h4>Latinoo College Expo 2018 - DONATION</h4>
                                            </a>
                                            <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                        <div class="pg-eve-reg">
                                            <a href="{{url('/event-register')}}">Register</a><a href="{{url('/event-details')}}">Read more</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ho-ev-date pg-eve-date"><span>12</span><span>feb,2018</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a href="{{url('/event-register')}}">
                                                <h4>Training at Team Fabio Clemente</h4>
                                            </a>
                                            <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                        <div class="pg-eve-reg">
                                            <a href="{{url('/event-register')}}">Register</a><a href="{{url('/event-details')}}">Read more</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ho-ev-date pg-eve-date"><span>26</span><span>apr,2018</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a href="{{url('/event-register')}}">
                                                <h4>Weekly Breakdance Practice</h4>
                                            </a>
                                            <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                        <div class="pg-eve-reg">
                                            <a href="{{url('/event-register')}}">Register</a><a href="{{url('/event-details')}}">Read more</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ho-ev-date pg-eve-date"><span>18</span><span>sep,2018</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a href="{{url('/event-register')}}">
                                                <h4>Admissions Information Session and Tour</h4>
                                            </a>
                                            <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                        <div class="pg-eve-reg">
                                            <a href="{{url('/event-register')}}">Register</a><a href="{{url('/event-details')}}">Read more</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ho-ev-date pg-eve-date"><span>07</span><span>nov,2018</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a href="{{url('/event-register')}}">
                                                <h4>CUNY Assessment Test Workshop</h4>
                                            </a>
                                            <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                        <div class="pg-eve-reg">
                                            <a href="{{url('/event-register')}}">Register</a><a href="{{url('/event-details')}}">Read more</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ho-ev-date pg-eve-date"><span>18</span><span>sep,2018</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a href="{{url('/event-register')}}">
                                                <h4>Fire & ice launch party</h4>
                                            </a>
                                            <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                        <div class="pg-eve-reg">
                                            <a href="{{url('/event-register')}}">Register</a><a href="{{url('/event-details')}}">Read more</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ho-ev-date pg-eve-date"><span>07</span><span>nov,2018</span>
                                        </div>
                                        <div class="ho-ev-link pg-eve-desc">
                                            <a href="{{url('/event-register')}}">
                                                <h4>Educate to Empower NYE Party</h4>
                                            </a>
                                            <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                            <span>9:15 am – 5:00 pm</span>
                                        </div>
                                        <div class="pg-eve-reg">
                                            <a href="{{url('/event-register')}}">Register</a><a href="{{url('/event-details')}}">Read more</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pg-pagina">
                            <ul class="pagination">
                                <li class="disabled"><a href="#!"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                <li class="active"><a href="#!">1</a></li>
                                <li class="waves-effect"><a href="#!">2</a></li>
                                <li class="waves-effect"><a href="#!">3</a></li>
                                <li class="waves-effect"><a href="#!">4</a></li>
                                <li class="waves-effect"><a href="#!">5</a></li>
                                <li class="waves-effect"><a href="#!"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->
@endsection