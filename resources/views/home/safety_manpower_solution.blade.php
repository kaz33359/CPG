@extends('home.layouts.layout')

@section('content')
<!-- Inner Page Breadcrumb -->
		<section class="inner_page_breadcrumb csv1">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 offset-xl-3 text-center">
						<div class="breadcrumb_content">
							<h4 class="breadcrumb_title">Business Solutions</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>

								<li class="breadcrumb-item active" aria-current="page">Safety Manpower Solution</li>
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
											<h3 class="cs_title">Safety Manpower Solution</h3>

											<ul class="cs_review_seller">
												<li class="list-inline-item"><a href="#Overview"><span>Read
															more</span></a></li>
												<!--<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
												<!--<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
												<!--<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
												<!--<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
												<!--<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>-->
												<!--<li class="list-inline-item"><a href="#">4.5 </a></li>-->
											</ul>

											<div class="courses_big_thumb">
												<div class="thumb">
													<img src="images/courses/c6.png">
												</div>
											</div>
										</div>
									</div>
									<div id="Overview" class="cs_row_two">
										<div class="cs_overview">
											<h4 class="title">Overview</h4>
											<h4 class="subtitle">Description</h4>
											<p class="mb30">We have a dedicated team in recruiting Health & Safety
												professionals for Safety Jobs across the Globe. We meet safety manpower
												supply at all the levels of management, from Stewards to Safety Head for
												all industries. </p>
											<p class="mb20">We have a dedicated research team, equipped with a
												comprehensive computerized database repository, which effectively meets
												the challenge of matching a client's needs with the candidate's unique
												capabilities. Our database includes specialists (Safety Engineer/HSE
												Engineers/EHS Personnel etc.) at all levels in order to establish a
												mutually beneficial relationship and execute desired functions with the
												appropriate safety standards.</p>
											<p></p>
											<h4 class="title">Categories of EHS personnel offered by us HSE</h4>
											<ul class="cs_course_syslebus">
												<h4>EHS</h4>
												<li><i class="fa fa-check"></i>
													<p> Director/ Vice-President (EHS) </p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Sr.Manager/ Manager/ Dy. Manager/ Asst. Manager (EHS)</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Corporate EHS Manager</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Safety Auditor/ Legal Consultants</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> EHS Trainers</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Safety Engineer</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Safety Officer</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Safety Supervisor</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Safety Steward</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Safety Trainees</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Safety Technician</p>
												</li>
											</ul>

											<p></p>
											<ul class="cs_course_syslebus">
												<h4>Environment</h4>
												<li><i class="fa fa-check"></i>
													<p> Environment</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Environmental Auditor/Legal Consultants</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> STP/ETP Operator/Technician</p>
												</li>
											</ul>
											<p></p>
											<ul class="cs_course_syslebus">
												<h4>Scaffold & rigging</h4>
												<li><i class="fa fa-check"></i>
													<p> Scaffolding Manager/Engineer</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Scaffolding Specialist /Supervisor</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Licensed Scaffolder’s</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Riggers</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Foreman</p>
												</li>
											</ul>
											<p></p>
											<ul class="cs_course_syslebus">
												<h4>Fire</h4>
												<li><i class="fa fa-check"></i>
													<p> Fire Manager</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Fire Engineer</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Fire Officer</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Fireman</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Driver cum pump operator</p>
												</li>
											</ul>
											<p></p>
											<ul class="cs_course_syslebus">
												<h4>Hygiene</h4>
												<li><i class="fa fa-check"></i>
													<p> Hygiene Specialist</p>
												</li>
											</ul>
											<p></p>
											<ul class="cs_course_syslebus">
												<h4>Health</h4>
												<li><i class="fa fa-check"></i>
													<p> Male Nurse/Paramedics</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> First-Aider</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Lab Technician</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Ambulance Drivers</p>
												</li>
											</ul>
											<p></p>
											<ul class="cs_course_syslebus">
												<h4>Security & Administration</h4>
												<li><i class="fa fa-check"></i>
													<p> Security Manager</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Security Supervisor</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Security guard/ head guard</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> watchmen</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> PTW Coordinator</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> storekeeper</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> EHS Administrator</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Emergency Response Personnel</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Rescue Team</p>
												</li>
												<li><i class="fa fa-check"></i>
													<p> Confined Space Attendant</p>
												</li>
											</ul>
										</div>
									</div>




								</div>

							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<h3 class="r_course_title">Related</h3>
						</div>
						<div class="col-lg-6 col-xl-4">
							<div class="top_courses">
								<div class="thumb">
									<img class="img-whp" src="images/courses/FPS.jpg" alt="4.jpg">
									<div class="overlay">
										<div class="tag">Related</div>
										<div class="icon"><span class="flaticon-like"></span></div>
										<a class="tc_preview_course" href="b1.html">View</a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p>CPG</p>
										<h5>Fire Protection System</h5>
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
											<li class="list-inline-item"><a href="#"><i
														class="flaticon-comment"></i></a></li>
											<li class="list-inline-item"><a href="b1.html">Click here to Know More </a>
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
									<img class="img-whp" src="images/courses/CCS.jpg" alt="3.jpg">
									<div class="overlay">
										<div class="tag">Related</div>
										<div class="icon"><span class="flaticon-like"></span></div>
										<a class="tc_preview_course" href="c8.html">View</a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p>CPG</p>
										<h5>C.P.G Consultancy Services</h5>
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
											<li class="list-inline-item"><a href="#"><i
														class="flaticon-comment"></i></a></li>
											<li class="list-inline-item"><a href="c8.html">Click here to Know More </a>
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
										<a class="tc_preview_course" href="c1.html">Preview Course</a>
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
											<li class="list-inline-item"><a href="#"><i
														class="flaticon-comment"></i></a></li>
											<li class="list-inline-item"><a href="c1.html">Click here to Know More </a>
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