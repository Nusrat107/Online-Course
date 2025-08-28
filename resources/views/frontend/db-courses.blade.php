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
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="admission.html">Admission</a></li>
                                <li><a href="all-courses.html">All courses</a></li>
                                <li><a href="course-details.html">Course details</a></li>
                                <li><a href="awards.html">Awards</a></li>
                                <li><a href="seminar.html">Seminar</a></li>
                                <li><a href="events.html">Events</a></li>
                                <li><a href="event-details.html">Event details</a></li>
                                <li><a href="event-register.html">Event register</a></li>
                                <li><a href="contact-us.html">Contact us</a></li>
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
        <div class="pro-cover">
        </div>
        <div class="pro-menu">
            <div class="container">
                <div class="col-md-9 col-md-offset-3">
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
        <div class="stu-db">
            <div class="container pg-inn">
                <div class="col-md-3">
                    <div class="pro-user">
                        <img src="{{asset('frontend/images/user.jpg')}}" alt="user">
                    </div>
                    <div class="pro-user-bio">
                        <ul>
                            <li>
                                <h4>Emily Jessica</h4>
                            </li>
                            <li>Student Id: ST17241</li>
                            <li><a href="#!"><i class="fa fa-facebook"></i> Facebook: my sample</a></li>
                            <li><a href="#!"><i class="fa fa-google-plus"></i> Google: my sample</a></li>
                            <li><a href="#!"><i class="fa fa-twitter"></i> Twitter: my sample</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="udb">
                        <div class="udb-sec udb-cour">
                            <h4><img src="{{asset('frontend/images/icon/db2.png')}}" alt="" /> Booking Courses</h4>
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.The point of using Lorem Ipsummaking it look like readable English.</p>
                            <div class="sdb-cours">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="list-mig-like-com com-mar-bot-30">
                                                <div class="list-mig-lc-img"> <img src="{{asset('frontend/images/course/3.jpg')}}" alt=""> <span class="home-list-pop-rat list-mi-pr">Duration:150 Days</span> </div>
                                                <div class="list-mig-lc-con">
                                                    <h5>Master of Science</h5>
                                                    <p>Illinois City,</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="list-mig-like-com com-mar-bot-30">
                                                <div class="list-mig-lc-img"> <img src="{{asset('frontend/images/course/4.jpg')}}" alt=""> <span class="home-list-pop-rat list-mi-pr">Duration:60 Days</span> </div>
                                                <div class="list-mig-lc-con">
                                                    <h5>Java Programming</h5>
                                                    <p>Illinois City,</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="list-mig-like-com com-mar-bot-30">
                                                <div class="list-mig-lc-img"> <img src="{{asset('frontend/images/course/5.jpg')}}" alt=""> <span class="home-list-pop-rat list-mi-pr">Duration:30 Days</span> </div>
                                                <div class="list-mig-lc-con">
                                                    <h5>Aeronautical Engineering</h5>
                                                    <p>Illinois City,</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="list-mig-like-com com-mar-bot-30">
                                                <div class="list-mig-lc-img"> <img src="{{asset('frontend/images/course/3.jpg')}}" alt=""> <span class="home-list-pop-rat list-mi-pr">Duration:20 Days</span> </div>
                                                <div class="list-mig-lc-con">
                                                    <h5>Master of Science</h5>
                                                    <p>Illinois City,</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="udb-sec udb-cour-stat">
                            <h4><img src="{{asset('frontend/images/icon/db3.png')}}" alt="" /> Course Status</h4>
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.The point of using Lorem Ipsummaking it look like readable English.</p>
                            <div class="pro-con-table">
                                <table class="bordered responsive-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Course Name</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Software Testing</td>
                                            <td>12May 2018</td>
                                            <td>18Aug 2018</td>
                                            <td><span class="pro-user-act">active</span></td>
                                            <td><a href="sdb-course-edit.html" class="pro-edit">edit</a></td>
                                            <td><a href="sdb-course-view.html" class="pro-edit">view</a></td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>Mechanical Design</td>
                                            <td>05Jan 2019</td>
                                            <td>10Feb 2019</td>
                                            <td><span class="pro-user-act">active</span></td>
                                            <td><a href="sdb-course-edit.html" class="pro-edit">edit</a></td>
                                            <td><a href="sdb-course-view.html" class="pro-edit">view</a></td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>Architecture & Planning</td>
                                            <td>21Jun 2020</td>
                                            <td>08Dec 2020</td>
                                            <td><span class="pro-user-act">active</span></td>
                                            <td><a href="sdb-course-edit.html" class="pro-edit">edit</a></td>
                                            <td><a href="sdb-course-view.html" class="pro-edit">view</a></td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td>Board Exam Training</td>
                                            <td>08Jun 2018</td>
                                            <td>21Sep 2018</td>
                                            <td><span class="pro-user-act pro-user-de-act">de-active</span></td>
                                            <td><a href="sdb-course-edit.html" class="pro-edit">edit</a></td>
                                            <td><a href="sdb-course-view.html" class="pro-edit">view</a></td>
                                        </tr>
                                        <tr>
                                            <td>05</td>
                                            <td>Yoga Training Classes</td>
                                            <td>16JFeb 2018</td>
                                            <td>26Mar 2018</td>
                                            <td><span class="pro-user-act pro-user-de-act">de-active</span></td>
                                            <td><a href="sdb-course-edit.html" class="pro-edit">edit</a></td>
                                            <td><a href="sdb-course-view.html" class="pro-edit">view</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->
@endsection