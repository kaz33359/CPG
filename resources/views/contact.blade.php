@extends('layouts.layout')

@section('content')
	<!-- Inner Page Breadcrumb -->
		<section class="inner_page_breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 offset-xl-3 text-center">
						<div class="breadcrumb_content">
							<h4 class="breadcrumb_title">Contact Us</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- How It's Work -->
		<section class="our-contact">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-lg-4">
						<div class="contact_localtion text-center">
							<div class="icon"><span class="flaticon-placeholder-1"></span></div>
							<h4>Our Location</h4>
							<p>Career Point Global </p>
							<p>Second floor , Jubilee bazaar </p>
							<p>Onden road , Kannur</p>
							<p>670001</p>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4">
						<div class="contact_localtion text-center">
							<div class="icon"><span class="flaticon-phone-call"></span></div>
							<h4>Mobile</h4>
							<p><a href="tel:+91 9567679966">+91 9567679966</a> </p>
							<p><a href="tel:+91 8281336937">+91 8281336937</a></p>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4">
						<div class="contact_localtion text-center">
							<div class="icon"><span class="flaticon-email"></span></div>
							<h4>Write Some Words</h4>
							<p><a href="mailto:careerpointglobal.hse@gmail.com">careerpointglobal.hse@gmail.com</a></p>
						</div>
					</div>
				</div>


			</div>
		</section>
@endsection