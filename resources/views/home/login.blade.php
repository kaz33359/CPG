@extends('home.layouts.layout')

@section('content')
<!-- Inner Page Breadcrumb -->
		<section class="inner_page_breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 offset-xl-3 text-center">
						<div class="breadcrumb_content">
							<h4 class="breadcrumb_title">Logın</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Logın</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Our LogIn Register -->
		<section class="our-log bgc-fa">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-lg-6 offset-lg-3">
						<div class="login_form inner_page">
							 <form class="text-left" method="POST" action="{{ route('student.auth') }}">
                            @csrf
								<div class="heading">
									<h3 class="text-center">Login to your account</h3>
								</div>
								<div class="form-group">
									<input type="email" name="email" class="form-control" id="exampleInputEmail3"
										placeholder="Email Address" required>
								</div>
								<div class="form-group">
									<input type="password" name="password" class="form-control" id="exampleInputPassword4"
										placeholder="Password" required>
								</div>
								<div class="form-group custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="exampleCheck3">
									<label class="custom-control-label" for="exampleCheck3">Remember me</label>
									<a class="tdu btn-fpswd float-right" href="#">Forgot Password?</a>
								</div>
								@if(session('error'))
								<div class="ui_kit_message_box">
									<div class="alert alert-primary alert-dismissible fade show" role="alert">
										 {{ session('error') }}
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
								</div>
                                @endif
								@if(session('logout'))
								<div class="ui_kit_message_box">
									<div class="alert alert-primary alert-dismissible fade show" role="alert">
										 {{ session('logout') }}
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
								</div>
                                @endif
								<button type="submit" class="btn btn-log btn-block btn-thm2">Login</button>

								
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection