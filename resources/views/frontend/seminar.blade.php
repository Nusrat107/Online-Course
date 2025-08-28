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
                                <li><a href="dashboard.html">User profile</a></li>
                                <li><a href="db-courses.html">Courses</a></li>
                                <li><a href="db-exams.html">Exams</a></li>
                                <li><a href="db-profile.html">Prfile</a></li>
                                <li><a href="db-time-line.html">Time line</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--SECTION START-->
    <section class="c-all p-semi">
        <div class="semi-inn">
            <div class="semi-com semi-left">
                <div class="all-title quote-title qu-new semi-text">
                    <h2>Seminar 2025</h2>
                    <p>Fusce purus mauris, blandit vitae purus eget, viverra volutpat nibh. Nam in elementum nisi, a placerat nisi. Quisque ullamcorper magna in odio rhoncus semper.Sed nec ultricies velit. Aliquam non massa id enim ultrices aliquet a ac
                        tortor.</p>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    <div class="semi-deta">
                        <ul>
                            <li>DATE:<span>Jan 01, 2025</span></li>
                            <li>Time:<span>02:00 PM GMT</span></li>
                            <li>Topic:<span>Feature Technology</span></li>
                            <li>Location:<span>illinois, united states</span></li>
                        </ul>
                    </div>
                    <p class="help-line">Join this for free!</p>
                </div>
            </div>
            <div class="semi-com semi-right">
                <div class="n-form-com semi-form">
                    <div class="col s12">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="number" class="form-control" placeholder="Phone number" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="email" class="form-control" placeholder="Email id" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="City">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Country">
                                </div>
                            </div>
                            <div class="form-group mar-bot-0">
                                <div class="col-md-12">
                                    <i class="waves-effect waves-light light-btn waves-input-wrapper" style=""><input type="submit" value="APPLY NOW" class="waves-button-input"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->

@endsection