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

                        <div class="udb-sec udb-prof">
                            <h4><img src="{{asset('frontend/images/icon/db1.png')}}" alt="" /> My Profile</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed
                                to using 'Content here, content here', making it look like readable English.</p>
                            <div class="sdb-tabl-com sdb-pro-table">
                                <table class="responsive-table bordered">
                                    <tbody>
                                        <tr>
                                            <td>Student Name</td>
                                            <td>:</td>
                                            <td>Sam Anderson</td>
                                        </tr>
                                        <tr>
                                            <td>Student Id</td>
                                            <td>:</td>
                                            <td>ST17241</td>
                                        </tr>
                                        <tr>
                                            <td>Eamil</td>
                                            <td>:</td>
                                            <td>sam_anderson@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>Phone</td>
                                            <td>:</td>
                                            <td>+01 4561 3214</td>
                                        </tr>
                                        <tr>
                                            <td>Date of birth</td>
                                            <td>:</td>
                                            <td>03 Jun 1990</td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td>:</td>
                                            <td>8800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>:</td>
                                            <td><span class="db-done">Active</span> </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="sdb-bot-edit">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                    <a href="#" class="waves-effect waves-light btn-large sdb-btn sdb-btn-edit"><i class="fa fa-pencil"></i> Edit my profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->
@endsection