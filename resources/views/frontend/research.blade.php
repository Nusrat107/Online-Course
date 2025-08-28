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
                                <li><a href="course-details.html">Accounting/Finance</a></li>
                                <li><a href="course-details.html">civil engineering</a></li>
                                <li><a href="course-details.html">Art/Design</a></li>
                                <li><a href="course-details.html">Marine Engineering</a></li>
                                <li><a href="course-details.html">Business Management</a></li>
                                <li><a href="course-details.html">Journalism/Writing</a></li>
                                <li><a href="course-details.html">Physical Education</a></li>
                                <li><a href="course-details.html">Political Science</a></li>
                                <li><a href="course-details.html">Sciences</a></li>
                                <li><a href="course-details.html">Statistics</a></li>
                                <li><a href="course-details.html">Web Design/Development</a></li>
                                <li><a href="course-details.html">SEO</a></li>
                                <li><a href="course-details.html">Google Business</a></li>
                                <li><a href="course-details.html">Graphics Design</a></li>
                                <li><a href="course-details.html">Networking Courses</a></li>
                                <li><a href="course-details.html">Information technology</a></li>
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

    <section>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn head-2-inn-padd-top">
                    <h1>Top Trending Research</h1>
                    <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                    <div class="event-head-sub">
                        <ul>
                            <li>Topic: Global warming</li>
                            <li>Time: 09:15 am – 5:00 pm</li>
                            <li>Location: Illunois</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>	
	
    <!--SECTION START-->
    <section>
        <div class="ed-res-bg">
		<div class="container com-sp pad-bot-70 ed-res-bg">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-rsear">
                        <div class="ed-rsear-in">
                            <ul>
                                <li>
									<div class="ed-rese-grid">
										<div class="ed-rsear-img">
											<img src="images/course/sm-1.jpg" alt="">
										</div>
										<div class="ed-rsear-dec">
											<h4><a href="#">Space Research with Nasa</a></h4>
											<a href="#">Status <span>Success</span></a>
											<a href="#">Duration <span>120 Days</span></a>
											<div class="ed-flag"><img src="images/icon/flag-1.png" alt=""></div>
										</div>
									</div>
                                </li>
                                <li>
									<div class="ed-rese-grid">
										<div class="ed-rsear-img">
											<img src="images/course/sm-2.jpg" alt="">
										</div>
										<div class="ed-rsear-dec">
											<h4><a href="#">Attention deficit disorder</a></h4>
											<a href="#">Status <span>Success</span></a>
											<a href="#">Duration <span>120 Days</span></a>
											<div class="ed-flag"><img src="images/icon/flag-2.png" alt=""></div>
										</div>
									</div>
                                </li>
                                <li>
									<div class="ed-rese-grid">
										<div class="ed-rsear-img">
											<img src="images/course/sm-4.jpg" alt="">
										</div>
										<div class="ed-rsear-dec">
											<h4><a href="#">Anorexia Nervosa</a></h4>
											<a href="#">Status <span>Success</span></a>
											<a href="#">Duration <span>120 Days</span></a>
											<div class="ed-flag"><img src="images/icon/flag-3.png" alt=""></div>
										</div>
									</div>
                                </li>
                                <li>
									<div class="ed-rese-grid">
										<div class="ed-rsear-img">
											<img src="images/course/sm-5.jpg" alt="">
										</div>
										<div class="ed-rsear-dec">
											<h4><a href="#">Internet Speed</a></h4>
											<a href="#">Status <span>Success</span></a>
											<a href="#">Duration <span>120 Days</span></a>
											<div class="ed-flag"><img src="images/icon/flag-4.png" alt=""></div>
										</div>
									</div>
                                </li>
                                <li>
									<div class="ed-rese-grid">
										<div class="ed-rsear-img">
											<img src="images/course/sm-6.jpg" alt="">
										</div>
										<div class="ed-rsear-dec">
											<h4><a href="#">Mobile Communications</a></h4>
											<a href="#">Status <span>Success</span></a>
											<a href="#">Duration <span>120 Days</span></a>
											<div class="ed-flag"><img src="images/icon/flag-5.png" alt=""></div>
										</div>
									</div>
                                </li>
                                <li>
									<div class="ed-rese-grid">
										<div class="ed-rsear-img">
											<img src="images/course/sm-7.jpg" alt="">
										</div>
										<div class="ed-rsear-dec">
											<h4><a href="#">Learning disabilities</a></h4>
											<a href="#">Status <span>Success</span></a>
											<a href="#">Duration <span>120 Days</span></a>
											<div class="ed-flag"><img src="images/icon/flag-6.png" alt=""></div>
										</div>
									</div>
                                </li>
                                <li>
									<div class="ed-rese-grid">
										<div class="ed-rsear-img">
											<img src="images/course/sm-8.jpg" alt="">
										</div>
										<div class="ed-rsear-dec">
											<h4><a href="#">Anorexia Nervosa</a></h4>
											<a href="#">Status <span>Success</span></a>
											<a href="#">Duration <span>120 Days</span></a>
											<div class="ed-flag"><img src="images/icon/flag-7.png" alt=""></div>
										</div>
									</div>
                                </li>
                                <li>
									<div class="ed-rese-grid">
										<div class="ed-rsear-img">
											<img src="images/course/sm-3.jpg" alt="">
										</div>
										<div class="ed-rsear-dec">
											<h4><a href="#">Internet Speed</a></h4>
											<a href="#">Status <span>Success</span></a>
											<a href="#">Duration <span>120 Days</span></a>
											<div class="ed-flag"><img src="images/icon/flag-8.png" alt=""></div>
										</div>
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
		</div>
    </section>
    <!--SECTION END-->
@endsection