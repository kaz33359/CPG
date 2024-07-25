<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <title>CPG | CAREER POINT GLOBAL </title>
    <meta name="title" content="CPG | CAREER POINT GLOBAL ">
    <meta name="description"
        content="CAREER POINT GLOBAL | Find the Best Courses. Technology is bringing a massive wave of evolution on learning things on different ways. Ready to get Started? ">
    <meta name="keywords"
        content="safety,Career,Safetyfield,FIREMEN,fireforce,career at safety,Safety engineer,Safety officer,Career Point Global,CPG,Safety Feild,STED,IOSH,OTHM,level 6 diploma ">

    <meta name="author" content="CPG | CAREER POINT GLOBAL ">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://careerpointglobal.com/">
    <meta property="og:title" content="CPG | CAREER POINT GLOBAL ">
    <meta property="og:description"
        content="CAREER POINT GLOBAL | Find the Best Courses. Technology is bringing a massive wave of evolution on learning things on different ways. Ready to get Started? ">
    <meta property="og:image" content="{{ URL('images/cpglogo.jpg') }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://careerpointglobal.com/">
    <meta property="twitter:title" content="CPG | CAREER POINT GLOBAL ">
    <meta property="twitter:description"
        content="CAREER POINT GLOBAL | Find the Best Courses. Technology is bringing a massive wave of evolution on learning things on different ways. Ready to get Started? ">
    <meta property="twitter:image" content="{{ URL('images/cpglogo.jpg') }}" />

    <!-- Favicon -->
    <link href="{{ URL('images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ URL('images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" />


    <!-- css file -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <style>

        .whatsapp-float {
            position: fixed;
            bottom: 60px;
            right: 20px;
            z-index: 1000;
            background-color: #fff;
            border-radius: 50%;
            padding: 10px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }

        .whatsapp-icon {
            width: 40px;
            height: 40px;
        }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="wrapper">
        <div class="preloader"></div>

        <div class="header_top home3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-xl-5">
                        <ul class="home3_header_top_contact pull-left">
                            <li class="list-inline-item"><a href="tel:+918281336937"><i class="fa fa-phone"></i>&nbsp;
                                    +91 8281336937</a></li>
                            <li class="list-inline-item"><a href="tel:+919567679966"><i class="fa fa-phone"></i>&nbsp;
                                    +91 9567679966</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-xl-7">
                        <ul class="sign_up_btn pull-right dn-smd mt15 home3">
                            <li class="list-inline-item"><a href="#" class="btn btn-md" data-toggle="modal"
                                    data-target="#exampleModalCenter"><i class="flaticon-user"></i> <span
                                        class="dn-md">Login</span></a></li>
                            {{-- <li class="list-inline-item"><a href="#" class="btn btn-md" data-toggle="modal"
                                    data-target="#registerForm"><i class="flaticon-online-learning-1"></i> <span
                                        class="dn-md">Register</span></a></li> --}}
                            <li class="list-inline-item"><a href="#registerForm" class="btn btn-md"><i
                                        class="flaticon-online-learning-1"></i> <span class="dn-md">Quick Enquiry</span></a>
                            </li>

                        </ul><!-- Button trigger modal -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header Nav -->
        <header class="header-nav menu_style_home_three navbar-scrolltofixed stricky main-menu">
            <div class="container-fluid">
                <!-- Ace Responsive Menu -->
                <nav>
                    <!-- Menu Toggle btn-->
                    <div class="menu-toggle">
                        <img class="nav_logo_img img-fluid" src="{{ URL('images/header-logo3.png') }}"
                            alt="header-logo3.png">
                        <button type="button" id="menu-btn">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <a href="#" class="navbar_brand float-left dn-smd">
                        <img class="logo1 img-fluid" src="{{ URL('images/header-logo.png') }}" alt="header-logo.png">
                        <img class="logo2 img-fluid" src="{{ URL('images/header-logo2.png') }}" alt="header-logo2.png">
                    </a>
                    <!-- Responsive Menu Structure-->
                    <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
                    <div class="ht_left_widget home3 float-left">
                        <ul>
                            <li class="list-inline-item list_s dib-1366 dn">
                                <div class="search_overlay home3">
                                    <a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger"
                                        href="#">
                                        <span id="search-button"><i class="flaticon-magnifying-glass"></i></span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                        <li class="last">
                            <a href="{{ route('contact') }}"><span class="title">Contact</span></a>
                        </li>
                        <li class="list_five">
                            <a href="{{ route('blog') }}"><span class="title">Blog</span></a>
                        </li>
                        <li class="list_four">
                            <a href="#"><span class="title">Business Solution</span></a>
                            <ul>
                                <li><a href="{{ route('consultancy-services') }}">C.P.G Consultancy services</a></li>
                                <li><a href="{{ route('safety-manpower-solution') }}">Safety Manpower Solution</a>
                                </li>
                                <li><a href="{{ route('fire-protection-system') }}">Fire Protection System</a></li>
                            </ul>
                        </li>
                        <li class="list_three">

                            <a href="#"><span class="title">Courses</span></a>
                            <ul>
                                <li><a href="{{ route('CSP-ASP-training') }}">CSP / ASP Training </a></li>
                                <li><a href="{{ route('OTHM') }}">OTHM Level 6 Diploma</a></li>
                                <li><a href="{{ route('STED') }}">STED Council Diploma</a></li>
                            </ul>

                        </li>
                        <li class="list_two">
                            <a href="{{ route('about') }}"><span class="title">About</span></a>
                        </li>
                        <li class="list_one">
                            <a href="{{ route('home') }}"><span class="title">Home</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Responsive Menu -->
            </div>
        </header>
        <!-- Modal -->
        <div class="sign_up_modal modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="login_form">
                                <form action="{{ route('student.auth') }}" method="POST">
                                    @csrf
                                    <div class="heading">
                                        <h3 class="text-center">Login to your account</h3>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control"
                                            id="exampleInputEmail1" placeholder="Email Address" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control"
                                            id="exampleInputPassword1" placeholder="Password" required>
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                        <a class="tdu text-thm float-right" href="#">Forgot Password?</a>
                                    </div>
                                    @if (session('error'))
                                        <div class="ui_kit_message_box">
                                            <div class="alert alert-primary alert-dismissible fade show"
                                                role="alert">
                                                {{ session('error') }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    @endif
                                    {{-- @if (session('logout'))
										<div class="ui_kit_message_box">
											<div class="alert alert-primary alert-dismissible fade show" role="alert">
													{{ session('logout') }}
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
										</div>
										@endif --}}
                                    <button type="submit" id="btnLogin"
                                        class="btn btn-log btn-block btn-thm2">Login</button>
                                    <hr>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="sign_up_modal modal fade" id="registerForm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="login_form">
                                <form action="{{ route('course.register') }}" method="POST">
                                    @csrf
                                    <div class="heading">
                                        <h3 class="text-center">Register now for details</h3>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control"
                                            id="exampleInputname" placeholder="Enter your fullname" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control"
                                            id="exampleInputEmail1" placeholder="Enter email address" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="mobile" class="form-control"
                                            id="exampleInputPassword1" placeholder="Enter mobile number" required>
                                    </div>
                                    <div class="form-group">
                                        <select name="course_id" class="form-control" id="exampleSelectCourse"
                                            required>
                                            <option value="">Select a course</option>
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}">{{ $course->course_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if (session('error'))
                                        <div class="ui_kit_message_box">
                                            <div class="alert alert-primary alert-dismissible fade show"
                                                role="alert">
                                                {{ session('error') }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    @endif
                                    <button type="submit" id="btnLogin"
                                        class="btn btn-log btn-block btn-thm2">Register</button>
                                    <hr>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}


        <!-- Main Header Nav For Mobile -->
        <div id="page" class="stylehome1 home3 h0">
            <div class="mobile-menu">
                <div class="header stylehome1">
                    <div class="main_logo_home2">
                        <img class="nav_logo_img img-fluid float-left mt20" src="{{ URL('images/header-logo.png') }}"
                            alt="header-logo.png">
                    </div>
                    <ul class="menu_bar_home2">
                        <li class="list-inline-item">
                            <div class="search_overlay">
                                <a id="search-button-listener2" class="mk-search-trigger mk-fullscreen-trigger"
                                    href="#">
                                    <!-- <div id="search-button2"><i class="flaticon-magnifying-glass"></i></div> -->
                                </a>
                                <div class="mk-fullscreen-search-overlay" id="mk-search-overlay2">
                                    <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button2"><i
                                            class="fa fa-times"></i></a>
                                    <div id="mk-fullscreen-search-wrapper2">
                                        <form method="get" id="mk-fullscreen-searchform2">
                                            <input type="text" value="" placeholder="Search courses..."
                                                id="mk-fullscreen-search-input2">
                                            <i class="flaticon-magnifying-glass fullscreen-search-icon"><input
                                                    value="" type="submit"></i>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item"><a href="#menu"><span></span></a></li>
                    </ul>
                </div>
            </div><!-- /.mobile-menu -->
            <nav id="menu" class="stylehome1">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>

                    <li><span>Course</span>
                        <ul>
                            <li><a href="{{ route('CSP-ASP-training') }}">CSP / ASP Training </a></li>
                            <li><a href="{{ route('OTHM') }}">OTHM Level 6 Diploma</a></li>
                            <li><a href="{{ route('STED') }}">STED Council Diploma</a></li>
                        </ul>
                    </li>

                    <li><span>Business solution</span>
                        <ul>
                            <li><a href="{{ route('consultancy-services') }}">C.P.G Consultancy services</a></li>
                            <li><a href="{{ route('safety-manpower-solution') }}">Safety Manpower Solution</a></li>
                            <li><a href="{{ route('fire-protection-system') }}">Fire Protection System</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('login') }}"><span class="flaticon-user"></span> Login</a></li>
                </ul>
            </nav>
        </div>

        @yield('content')



        <!-- Our Footer -->
        <section class="footer_one home3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
                        <div class="footer_company_widget home3">
                            <h4>LOCATION</h4>
                            <p>Career Point Global </p>
                            <p>Second floor,Jubilee bazaar </p>
                            <p>Onden road , Kannur</p>
                            <p>670001</p>
                            <p></p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
                        <div class="footer_company_widget home3">
                            <h4>CONTACT</h4>
                            <p>+91 9567679966</p>
                            <p>+91 8281336937</p>
                            <p>careerpointglobal.hse@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                        <div class="footer_company_widget home3">
                            <h4>COMPANY</h4>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-sm-6 col-md-6 col-md-3 col-lg-3">
                        <div class="footer_apps_widget home3">
                            <h4>MOBILE</h4>
                            <div class="app_grid">
                                <a href="https://wa.me/919074577936" class="whatsapp-float">
                                    <img src="images/w.png" alt="WhatsApp" class="whatsapp-icon">
                                </a>

                                <a href="tel:+91 8281336937"><button class="apple_btn btn-dark">
                                        <span class="icon">
                                            <span><img src="images/m.png"></span>
                                        </span>
                                        <span class="title">Mobile</span>
                                        <span class="subtitle">Contact us</span>
                                    </button></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Footer Middle Area -->
        <section class="footer_middle_area home3 p0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 pb15 pt15">
                        <div class="logo-widget home3">
                            <img class="img-fluid" src="{{ URL('images/header-logo3.png') }}"
                                alt="header-logo3.png">
                            <span></span>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-5 col-lg-6 col-xl-6 pb25 pt25 brdr_left_right home3">
                        <div class="footer_menu_widget home3">
                            <ul>
                                <li class="list-inline-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="list-inline-item"><a href="{{ route('CSP-ASP-training') }}">Course</a>
                                </li>
                                <li class="list-inline-item"><a href="{{ route('consultancy-services') }}">Business
                                        Solutions</a></li>
                                <li class="list-inline-item"><a href="{{ route('blog') }}">Blog</a></li>
                                <li class="list-inline-item"><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-4 pb15 pt15">
                        <div class="footer_social_widget mt15">
                            <ul>
                                <li class="list-inline-item"><a href="https://www.facebook.com/careerpointglobal/" target="blank"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="https://www.linkedin.com/company/cpg-career-point-global/" target="blank"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Footer Bottom Area -->
        <section class="footer_bottom_area home3 pt30 pb30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="copyright-widget text-center">
                            <p>Copyright CPG © Since 2020. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <a class="scrollToHome home3" href="#"><i class="flaticon-up-arrow-1"></i></a>
    </div>
    <!-- Wrapper End -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.mmenu.all.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/ace-responsive-menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/isotop.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/snackbar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/simplebar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/parallax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/scrollto.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-scrolltofixed-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.counterup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/progressbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/timepicker.js') }}"></script>
    <!-- Custom script for all pages -->
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    @include('sweetalert::alert')
    <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>

</body>


</html>
