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

								<li class="breadcrumb-item active" aria-current="page">All Courses</li>
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
						<div class="col-lg-6 col-xl-4">
							<div class="top_courses">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('images/courses/3.jpg') }}" alt="3.jpg">
									<div class="overlay">
										<div class="tag">Top Course</div>
										<div class="icon"><span class="flaticon-like"></span></div>
										<a class="tc_preview_course" href="{{ route('OTHM') }}">Preview Course</a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p>CPG</p>
										<h5>OTHM Level 6 Diploma</h5>
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
											<li class="list-inline-item"><a href="{{ route('OTHM') }}">Click here to Know More </a>
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
									<img class="img-whp" src="{{ asset('images/courses/4.jpg') }}" alt="4.jpg">
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
											<li class="list-inline-item"><a href="#"><i
														class="flaticon-comment"></i></a></li>
											<li class="list-inline-item"><a href="{{ route('STED') }}">Click here to Know More </a>
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
									<img class="img-whp" src="{{ asset('images/courses/CCS.jpg') }}" alt="3.jpg">
									<div class="overlay">
										<div class="tag">Related</div>
										<div class="icon"><span class="flaticon-like"></span></div>
										<a class="tc_preview_course" href="{{ route('consultancy-services') }}">View</a>
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
											<li class="list-inline-item"><a href="{{ route('consultancy-services') }}">Click here to Know More </a>
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
									<img class="img-whp" src="{{ asset('images/courses/IOSH_managing_safely.jpeg') }}" alt="3.jpg">
									<div class="overlay">
										<div class="tag">Related</div>
										<div class="icon"><span class="flaticon-like"></span></div>
										<a class="tc_preview_course" href="{{ route('IOSH-managing-safely') }}">View</a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p>CPG</p>
										<h5>IOSH Managing Safely</h5>
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
											<li class="list-inline-item"><a href="{{ route('IOSH-managing-safely') }}">Click here to Know More </a>
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
									<img class="img-whp" src="{{ asset('images/courses/IOSH_trainer.jpg') }}" alt="3.jpg">
									<div class="overlay">
										<div class="tag">Related</div>
										<div class="icon"><span class="flaticon-like"></span></div>
										<a class="tc_preview_course" href="{{ route('IOSH-train-the-trainer') }}">View</a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p>CPG</p>
										<h5>IOSH Train the Trainer</h5>
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
											<li class="list-inline-item"><a href="{{ route('IOSH-train-the-trainer') }}">Click here to Know More </a>
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
									<img class="img-whp" src="{{ asset('images/courses/NVQ.jpg') }}" alt="3.jpg">
									<div class="overlay">
										<div class="tag">Related</div>
										<div class="icon"><span class="flaticon-like"></span></div>
										<a class="tc_preview_course" href="{{ route('NVQ') }}">View</a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p>CPG</p>
										<h5>NVQ Level 6 Diploma</h5>
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
											<li class="list-inline-item"><a href="{{ route('NVQ') }}">Click here to Know More </a>
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
									<img class="img-whp" src="{{ asset('images/courses/ISO.jpg') }}" alt="3.jpg">
									<div class="overlay">
										<div class="tag">Related</div>
										<div class="icon"><span class="flaticon-like"></span></div>
										<a class="tc_preview_course" href="{{ route('ISO') }}">View</a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p>CPG</p>
										<h5>ISO Lead Auditor Courses</h5>
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
											<li class="list-inline-item"><a href="{{ route('ISO') }}">Click here to Know More </a>
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
									<img class="img-whp" src="{{ asset('images/courses/STI.jpg') }}" alt="3.jpg">
									<div class="overlay">
										<div class="tag">Related</div>
										<div class="icon"><span class="flaticon-like"></span></div>
										<a class="tc_preview_course" href="{{ route('STI-USA') }}">View</a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p>CPG</p>
										<h5>Scaffolding Certification (STI - USA)</h5>
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
											<li class="list-inline-item"><a href="{{ route('STI-USA') }}">Click here to Know More </a>
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
									<img class="img-whp" src="{{ asset('images/courses/CPD.jpg') }}" alt="3.jpg">
									<div class="overlay">
										<div class="tag">Related</div>
										<div class="icon"><span class="flaticon-like"></span></div>
										<a class="tc_preview_course" href="{{ route('CPD-UK') }}">View</a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p>CPG</p>
										<h5>Process Safety Certification (CPD UK)</h5>
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
											<li class="list-inline-item"><a href="{{ route('CPD-UK') }}">Click here to Know More </a>
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

		</section>

@endsection