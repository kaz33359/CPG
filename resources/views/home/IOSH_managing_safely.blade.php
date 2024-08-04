@extends('home.layouts.layout')

@section('content')
    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb csv1">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 text-center">
                    <div class="breadcrumb_content">
                        <h4 class="breadcrumb_title">Courses</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">IOSH Managing Safely</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team Members -->
    <section class="our-team pb40">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="courses_single_container">
                                <div class="cs_row_one">
                                    <div class="cs_ins_container">
                                        <div class="cs_instructor">


                                        </div>
                                        <h3 class="cs_title">IOSH Managing Safely
                                        </h3>
                                        <ul class="cs_review_seller">
                                            <li class="list-inline-item"><a href="#"><span>Best Seller</span></a>
                                            </li>
                                            <!--<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
                                            <!--<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
                                            <!--<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
                                            <!--<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
                                            <!--<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
                                            <!--<li class="list-inline-item"><a href="#">4.5 </a></li>-->
                                        </ul>

                                        <div class="courses_big_thumb">
                                            <div class="thumb">
                                                <img src="images/courses/IOSH_managing_safely.jpeg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cs_row_two">
                                    <div class="cs_overview">
                                        <h4 class="title">Overview</h4>
                                        <h4 class="subtitle">Course Description</h4>
                                        <p class="mb30">The internationally recognized IOSH Managing Safely course equips
                                            managers and supervisors with the information and abilities necessary to
                                            successfully manage health and safety within their teams. Essential subjects
                                            covered in the training include hazard identification, risk assessment, incident
                                            investigation, and legal duties.
                                        </p>
                                        <!--<p class="mb20">Through this qualification, Learners will pick up the Core abilities and information to comprehend the Legal and administrative foundation to occupational health and safety policy, to have the option to assess policies, just as to suggest and execute strategy changes. </p>-->
                                        <!--<p>Learners will create information and aptitudes and standards pertinent to the putting policy into practice, utilizing management systems, resources, occupational risk, and incident management.</p>-->

                                        <p></p>
                                        <h4 class="subtitle">Benefits </h4>
                                        <p class="mb30">•<strong> Internationally recognized certification: </strong> </p>
                                        <p class="mb30">This internationally recognized IOSH training will improve the
                                            reputation of your company.
                                        </p>
                                        <p class="mb30">•<strong> Flexibility: </strong> </p>
                                        <p class="mb30">The program is adaptable and may be tailored to specific corporate
                                            requirements. With online learning, your staff may tailor their study schedules
                                            to work around business hours.
                                        </p>
                                        <p class="mb30">•<strong> Increased workplace safety: </strong> </p>
                                        <p class="mb30">Use your expertise to make your workplace a safer place to work, resulting in fewer mishaps and accidents.
                                        </p>
                                        <p class="mb30">•<strong> Legal compliance: </strong> </p>
                                        <p class="mb30">To reduce legal risks, make sure your company complies with health and safety requirements.
                                        </p>
                                        <p></p>
                                    </div>
                                </div>




                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="r_course_title">Related Courses</h3>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="top_courses">
                            <div class="thumb">
                                <img class="img-whp" src="images/courses/4.jpg" alt="4.jpg">
                                <div class="overlay">
                                    <div class="tag">Top Course</div>
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                    <a class="tc_preview_course" href="{{ route('STED') }}">Preview Course</a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p>CPG</p>
                                    <h5>STED Council Diploma</h5>
                                    <!--<ul class="tc_review">-->
                                    <!--	<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
                                    <!--	<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
                                    <!--	<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
                                    <!--	<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
                                    <!--	<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
                                    <!--	<li class="list-inline-item"><a href="#">(6)</a></li>-->
                                    <!--</ul>-->
                                </div>
                                <div class="tc_footer">
                                    <ul class="tc_meta float-left">
                                        <!--<li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>-->
                                        <li class="list-inline-item"><a href="{{ route('STED') }}"><i
                                                    class="flaticon-comment"></i></a></li>
                                        <li class="list-inline-item"><a href="{{ route('STED') }}">Click here to Know More
                                            </a>
                                        </li>
                                        <!--<li class="list-inline-item"><a href="#">25</a></li>-->
                                    </ul>
                                    <div class="tc_price float-right">>></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="top_courses">
                            <div class="thumb">
                                <img class="img-whp" src="images/courses/5.jpg" alt="6.jpg">
                                <div class="overlay">
                                    <div class="tag">Top Course</div>
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                    <a class="tc_preview_course" href="{{ route('CSP-ASP-training') }}">Preview Course</a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p>CPG</p>
                                    <h5>CSP / ASP Training</h5>
                                    <!--<ul class="tc_review">-->
                                    <!--	<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
                                    <!--	<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
                                    <!--	<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
                                    <!--	<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
                                    <!--	<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
                                    <!--	<li class="list-inline-item"><a href="#">(6)</a></li>-->
                                    <!--</ul>-->
                                </div>
                                <div class="tc_footer">
                                    <ul class="tc_meta float-left">
                                        <!--<li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>-->
                                        <li class="list-inline-item"><a href="{{ route('CSP-ASP-training') }}"><i
                                                    class="flaticon-comment"></i></a></li>
                                        <li class="list-inline-item"><a href="{{ route('CSP-ASP-training') }}">Click here
                                                to Know More </a>
                                        </li>
                                        <!--<li class="list-inline-item"><a href="#">25</a></li>-->
                                    </ul>
                                    <div class="tc_price float-right">>></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="top_courses">
                            <div class="thumb">
                                <img class="img-whp" src="images/courses/SMS.jpg" alt="2.jpg">
                                <div class="overlay">
                                    <div class="tag">Related</div>
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                    <a class="tc_preview_course" href="{{ route('safety-manpower-solution') }}">View</a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p>CPG</p>
                                    <h5>Safety Manpower Solutions</h5>
                                    <!--<ul class="tc_review">-->
                                    <!--	<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
                                    <!--	<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
                                    <!--	<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
                                    <!--	<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
                                    <!--	<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
                                    <!--	<li class="list-inline-item"><a href="#">(6)</a></li>-->
                                    <!--</ul>-->
                                </div>
                                <div class="tc_footer">
                                    <ul class="tc_meta float-left">
                                        <!--<li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>-->
                                        <li class="list-inline-item"><a href="{{ route('safety-manpower-solution') }}"><i
                                                    class="flaticon-comment"></i></a></li>
                                        <li class="list-inline-item"><a
                                                href="{{ route('safety-manpower-solution') }}">Click here to Know More </a>
                                        </li>
                                        <!--<li class="list-inline-item"><a href="#">25</a></li>-->
                                    </ul>
                                    <div class="tc_price float-right">>></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        </div>
    </section>
@endsection
