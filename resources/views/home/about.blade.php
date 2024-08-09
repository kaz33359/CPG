@extends('home.layouts.layout')

@section('content')
<!-- Inner Page Breadcrumb -->
		<section class="inner_page_breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 offset-xl-3 text-center">
						<div class="breadcrumb_content">
							<h4 class="breadcrumb_title">About Us</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">About Us</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- About Text Content -->
<!-- About Text Content -->
		<section class="about-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="about_content">
							<h2>About us:</h2>
							<p class="color-black22 mt20">We at Career Point Global, are dedicated to deliver
								world-class
								Occupational Health & Safety,Environmental Management Training and Consultancy solution.
								We are
								a trusted leader in health, safety and environmental management. </p>
							<p class="color-black22 mt15">The expertise in HSE developed over the years allows us to work with
								organizations,
								developing and delivering innovative training solutions and consultancy services that
								help
								improve our customers' HSE performance. </p>
							<p class="color-black22 mt20">Our aim is to help our customers achieve the very highest Health and Safety
								standards required by law to protect their staff and Environment. </p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about_thumb">
							<img class="img-fluid" src="images/about/cpg.jpg" alt="cpg.jpg">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-6 mt-3">
						<div class="about_whoweare">
							<h2>Our mission </h2>
							<p class="color-black22 mt25">We keep people safe and healthy as possible in their work through education
								and
								practical guidance
							</p>
							<p class="color-black22 mt25"></p>
						</div>
					</div>
					<div class="col-lg-6 mt-3">
						<div class="about_whoweare">
							<h2>Our vision </h2>
							<p class="color-black22 mt25">We are dedicated in making sure no-one is injured or made ill through their
								work.
							</p>
							<!--<p class="mt25">We'll help you to develop knowledge and expertise, in whatever ways best suit your organisation and employees. Our educational support is comprehensive and flexible and covers all aspects of health, safety and environmental management.</p>-->
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Divider -->
		<section class="divider parallax bg-img2" data-stellar-background-ratio="0.3">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 text-center">
						<div class="divider-one">
							<p class="color-white">STARTING LEARNING WITH US</p>
							<h1 class="color-white text-uppercase">Enhance your skIlls wIth best courses</h1>
							<a class="btn btn-transparent divider-btn" href="{{ route('contact') }}">Get Started Now</a>
						</div>
					</div>
				</div>
			</div>
		</section>


@endsection