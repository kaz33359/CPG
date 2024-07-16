@extends('home.layouts.app')

@section('content')
<!-- Home Design -->
		<section class="home-three home3-overlay home3_bgi6">
			<div class="container">
				<div class="row posr">
					<div class="col-lg-12">
						<div class="home-text text-center">
							<h2 class="fz50">Find the Best Courses</h2>
							<p class="color-white">Technology is brining a massive wave of evolution on learning things
								on different ways.</p>
							<a class="btn home_btn" href="">Ready to get Started?</a>
						</div>
					</div>
				</div>
				<div class="row_style">
					<svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300"
						preserveAspectRatio="none">
						<path
							d="M 1000 280 l 2 -253 c -155 -36 -310 135 -415 164 c -102.64 28.35 -149 -32 -235 -31 c -80 1 -142 53 -229 80 c -65.54 20.34 -101 15 -126 11.61 v 54.39 z">
						</path>
						<path
							d="M 1000 261 l 2 -222 c -157 -43 -312 144 -405 178 c -101.11 33.38 -159 -47 -242 -46 c -80 1 -153.09 54.07 -229 87 c -65.21 25.59 -104.07 16.72 -126 16.61 v 22.39 z">
						</path>
						<path
							d="M 1000 296 l 1 -230.29 c -217 -12.71 -300.47 129.15 -404 156.29 c -103 27 -174 -30 -257 -29 c -80 1 -130.09 37.07 -214 70 c -61.23 24 -108 15.61 -126 10.61 v 22.39 z">
						</path>
					</svg>
				</div>
			</div>
		</section>

		<!-- about3 home3 -->
		<section class="home3_about home3_wave">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-xl-6">
						<div class="about_home3">
							<h3>What We Do</h3>
							<h5>Start your journey to a better life with online practical courses</h5>
							<p>We offer a comprehensive suite of training and qualifications in health, safety and
								environmental
								management. We educate people all over the world to help them improve their knowledge
								and
								skills, reduce risks, make workplaces healthier and safer for everyone and improve
								long-term
								business performance.</p>
							<a href="{{ route('about') }}" class="btn about_btn_home3">View More</a>
							<ul class="partners_thumb_list">

							</ul>
						</div>
					</div>
					<div class="col-lg-6 col-xl-6">
						<div class="row">
							<div class="col-sm-6 col-lg-6">
								<div class="home3_about_icon_box one">
									<span class="icon"><span class="flaticon-account"></span></span>
									<div class="details">
										<h4>Professional Trainers</h4>
										<p>One of the most important hard skills a trainer should master is internet
											research.
										</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-6">
								<div class="home3_about_icon_box two">
									<span class="icon"><span class="flaticon-online"></span></span>
									<div class="details">
										<h4>Commitment</h4>
										<p>The ability to design well-structured courses and build fit-for-purpose
											content.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-6">
								<div class="home3_about_icon_box three">
									<span class="icon"><span class="flaticon-student-1"></span></span>
									<div class="details">
										<h4>Innovation</h4>
										<p>One of the most essential tools for training and development is an eLearning
											content
											authoring tool.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-6">
								<div class="home3_about_icon_box four">
									<span class="icon"><span class="flaticon-employee"></span></span>
									<div class="details">
										<h4>International Certifications</h4>
										<p>Successful completion of these courses enables you to move on International
											level.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="about_home3_shape_container">
							<div class="about_home3_shape"><img src="{{ URL('images/about/shape1.png') }}" alt="shape1.png"></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Top Course home3 -->


		<!-- School category courses -->
		<section id="Top_Courses" class="school-category-courses pt30">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="main-title text-center">
							<h3 class="mt0">Browse Our Top Courses</h3>
							<p>We offer a comprehensive suite of training and qualifications in health, safety and
								environmental
								management.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-lg-4" onclick="location.href='c1.html';">
						<div class="img_hvr_box home3" style="background-image: url({{ URL('images/courses/1.jpeg') }});">
							<div class="overlay">
								<div class="details">
									<a href="{{ route('CSP-ASP-training') }}">
										<h6 style="color:white;"><b>CSP / ASP Training </b></h6>

								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-lg-4" onclick="location.href='{{ route('OTHM') }}';">
						<div class="img_hvr_box home3" style="background-image: url({{ URL('images/courses/6.jpg') }});">
							<div class="overlay">
								<div class="details">
									<a href="c3.html">
										<h6 style="color:white;"><b>OTHM Level 6 Diploma</b></h6>

								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-4" onclick="location.href='{{ route('STED') }}';">
						<div class="img_hvr_box home3" style="background-image: url({{ URL('images/courses/7.jpg') }});">
							<div class="overlay">
								<div class="details">
									<a href="c4.html">
										<h6 style="color:white;"><b>STED Council Diploma</b></h6>

								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 offset-lg-3">
						<div class="courses_all_btn home3 text-center">
							<a class="btn btn-transparent" href="">View All Courses</a>
						</div>
					</div>
				</div>
			</div>
		</section>



		<!-- Our Blog Post -->
		<section class="our-blog pb30 pt30">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="main-title text-center">
							<h3 class="mt0">Business solutions</h3>
							<p>We provide just the right level of commercial and economic benefits to your business.
							</p>
							<h3 class="mt0"></h3>
							<p></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-lg-4 col-xl-4">
						<div class="blog_post_home2 home3">
							<div class="bph2_header" onclick="location.href='{{ route('consultancy-services') }}';">
								<img class="img-fluid" src="{{ URL('images/blog/cpg.jpg') }}" alt="5.jpg">

							</div>
							<div class="details">
								<div class="post_meta">
									<ul>

									</ul>
								</div>
								<a href="{{ route('consultancy-services') }}">
									<h4>C.P.G Consultancy Services</h4>
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-4 col-xl-4">
						<div class="blog_post_home2 home3">
							<div class="bph2_header" onclick="location.href='{{ route('safety-manpower-solution') }}';">
								<img class="img-fluid" src="{{ URL('images/blog/4.jpg') }}" alt="4.jpg">

							</div>
							<div class="details">
								<div class="post_meta">
									<ul>

									</ul>
								</div>
								<a href="{{ route('safety-manpower-solution') }}">
									<h4>Safety Manpower Solution</h4>
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-4 col-xl-4">
						<div class="blog_post_home2 home3">
							<div class="bph2_header" onclick="location.href='{{ route('fire-protection-system') }}';">
								<img class="img-fluid" src="{{ URL('images/blog/6.jpg') }}" alt="6.jpg">

							</div>
							<div class="details">
								<div class="post_meta">
									<ul>

									</ul>
								</div>
								<a href="{{ route('fire-protection-system') }}">
									<h4>Fire Protection System </h4>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- about3 home3 -->
		<section class="home3_about2 pb10 pt30">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="main-title text-center">
							<h3 class="mt0">Join Us now</h3>
							<p></p>
						</div>
					</div>
				</div>

				<div class="row mt60">
					<div class="col-sm-6 col-lg-6 col-xl-6">
						<div class="becomea_instructor_home3 style1">
							<div class="bi_grid">
								<h3>Join our Course</h3>
								<p> <br class="dn-lg"> </p>
								<a class="btn btn-white" href="{{ route('contact') }}">Join Us <span
										class="flaticon-right-arrow-1"></span></a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6 col-xl-6">
						<div class="becomea_instructor_home3 style2">
							<div class="bi_grid">
								<h3>Business Solutions</h3>
								<p> <br class="dn-lg"></p>
								<a class="btn btn-white" href="{{ route('contact') }}">Join Us<span
										class="flaticon-right-arrow-1"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        
@endsection