<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CPG | Course View</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('admin-assets/assets/img/cpglogo.jpg') }}" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('admin-assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin-assets/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('admin-assets/assets/css/users/user-profile.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin-assets/assets/css/components/timeline/custom-timeline.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin-assets/assets/css/components/tabs-accordian/custom-accordions.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/plugins/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/assets/css/elements/alert.css') }}">



    <!--  END CUSTOM STYLE FILE  -->
</head>
<body class="sidebar-noneoverflow">
    
    <!--  BEGIN NAVBAR  -->
   <div class="header-container">
        <header class="header navbar navbar-expand-sm">

            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>

            <div class="nav-logo align-self-center">
                <a class="navbar-brand" href="dashboard"><img alt="logo" src="{{ asset('admin-assets/assets/img/header-logo.png') }}"> </a>
            </div>


            <ul class="navbar-item flex-row nav-dropdowns ml-auto">


                <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-bell">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg><span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                        <div class="notification-scroll">

                            <div class="dropdown-item">
                                <div class="media server-log">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-server">
                                        <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                                        <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                                        <line x1="6" y1="6" x2="6" y2="6"></line>
                                        <line x1="6" y1="18" x2="6" y2="18"></line>
                                    </svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Server Rebooted</h6>
                                            <p class="">45 min ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-heart">
                                        <path
                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                        </path>
                                    </svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Licence Expiring Soon</h6>
                                            <p class="">8 hrs ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media file-upload">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Kelly Portfolio.pdf</h6>
                                            <p class="">670 kb</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-check">
                                                <polyline points="20 6 9 17 4 12"></polyline>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-body align-self-center">
                                <h6>Admin</h6>
                                <p>Welcome Admin!!</p>
                            </div>
                            <img src="{{ asset('admin-assets/assets/img/profile-7.jpg') }}" class="img-fluid" alt="admin-profile">
                            <span class="badge badge-success"></span>
                        </div>
                    </a>

                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="dropdown-item">
                            <a href="admin_profile">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg> <span> Profile</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="apps_mailbox.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-inbox">
                                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                    <path
                                        d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                    </path>
                                </svg> <span> Inbox</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="logout">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg> <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN TOPBAR  -->
        <div class="topbar-nav header navbar" role="banner">
            <nav id="topbar">
                <ul class="navbar-nav theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <a href="dashboard">
                            <img src="{{ asset('admin-assets/assets/img/header-logo.png') }}" class="navbar-logo" alt="logo">
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="dashboard" class="nav-link"> </a>
                    </li>
                </ul>

                <ul class="list-unstyled menu-categories" id="topAccordion">

                    <li class="menu single-menu">
                        <a href="{{ url('admin/dashboard') }}" aria-expanded="true"
                            class="dropdown-toggle autodroprown">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu single-menu active">
                        <a href="{{ url('admin/courses') }}" aria-expanded="true"
                            class="dropdown-toggle autodroprown">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>Courses</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu single-menu">
                        <a href="{{ url('admin/students') }}" aria-expanded="true"
                            class="dropdown-toggle autodroprown">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>Students</span>
                            </div>
                        </a>
                    </li>
                    
                </ul>
            </nav>
        </div>
        <!--  END TOPBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="layout-px-spacing">
                <div class="page-header">
                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Courses</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Course Profile</a></li>
                        </ol>
                    </nav>
                </div>

                <div class="row layout-spacing">

                    <!-- Content -->
                    <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

                        <div class="user-profile layout-spacing">
                            <div class="widget-content widget-content-area">
                                <div class="d-flex justify-content-between">
                                    <h3 class="">Course Info</h3>
                                    <a href="javascript:void(0);" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                </div>
                                @foreach ($courses as $course_info)
                                    <div class="text-center user-info">
                                    {{-- <img src="assets/img/profile-3.jpg" alt="avatar"> --}}
                                    <p class="">{{ $course_info -> course_name }}</p>
                                </div>
                                <div class="user-info-list">
                                    <div class="">
                                        <ul class="contacts-block list-unstyled">
                                            <li class="contacts-block__item text-center">
                                               @foreach ($courses as $status)
                                                    @if ($status->status ==1)
                                                    <button class="btn btn-success mb-2 "><a href="{{ url('/status_course',$status->id) }}">Active</a></button>
                                                    @else
                                                    <button class="btn btn-danger mb-2 "><a href="{{ url('/status_course',$status->id) }}">Deactive</a></button>
                                                    @endif
                                                @endforeach
                                            </li>
                                        </ul>
                                    </div>                                    
                                </div>
                                @endforeach
                                
                            </div>
                        </div>


                    </div>

                    <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">

                        <div class="skills layout-spacing ">
                            <div class="widget-content widget-content-area">
                                <h3 class="">Edit Course Info</h3>
                                @foreach ($courses as $course_data)
                                    <form id="frmStudentRegistration">
                                        <div class="form-group mb-4">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="{{ $course_data -> course_name }}" >
                                        </div>
                                        <button type="submit" id="btnStudentRegistration" class="btn btn-primary mt-3 message">Submit</button>
                                    @csrf
                                    </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div id="accordionBasic" class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Add Course Body</h4>
                                        </div>
                                    </div>
                                </div> 
                                <div class="widget-content widget-content-area">
                                    <div id="toggleAccordion">
                    {{-- Module --}}
                                      <div class="card">
                                        <div class="card-header" id="headingOne1">
                                          <section class="mb-0 mt-0">
                                            <div role="menu" class="collapsed" data-toggle="collapse" data-target="#defaultAccordionOne" aria-expanded="true" aria-controls="defaultAccordionOne">
                                              Module  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                            </div>
                                          </section>
                                        </div>

                                        <div id="defaultAccordionOne" class="collapse" aria-labelledby="headingOne1" data-parent="#toggleAccordion">
                                          <div class="card-body">
                                                 @if(Session::has('module_success'))
                                                <div class="alert alert-light-success border-0 mb-4" role="alert"> 
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                    </button>
                                                    <strong>Success!</strong> {{Session::get('module_success')}}
                                                </div> 
                                                @endif    
                                                <form action="{{ route('addmodule') }}" method="POST">
                                                    @csrf
                                                    <div class="form-group mb-4">
                                                        <input type="text" class="form-control" id="module_name" name="module_name" placeholder="Module Name">
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label for="inputState">Course</label>
                                                        <select id="inputState" name="course_id" class="form-control"  required>
                                                            @foreach ($courses as $course)
                                                                <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @if ($errors->any())
                                                        @foreach ($errors->all() as $err)
                                                            <div class="alert alert-light-danger border-0 mb-4" role="alert"> 
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                                </button>
                                                                <strong>Error!</strong> {{ $err }}
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                    <button type="submit" class="btn btn-primary mt-3 message">Add Module</button>
                                                </form>
                                                <div class="col-xl-12 col-lg-12 col-sm-12 mt-5  layout-spacing">
                                                    <div class="widget-content widget-content-area br-6">
                                                        <table id="zero-config-module" class="table dt-table-hover" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Module Id</th>
                                                                    <th>Module Name</th>
                                                                    <th>Module Status</th>
                                                                    <th class="dt-no-sorting">Action</th>
                                                                </tr>
                                                            </thead>
                                                                <tbody>  
                                                                @foreach ($modules as $module)
                                                                    <tr>
                                                                    <td>{{ $module-> id}}</td>
                                                                    <td>{{ $module-> module_name }}</td>
                                                                    @if ($module-> status == 1)
                                                                    <td><button class="btn btn-success mb-2"><a href="{{ url('/status_module',$module->id) }}">Active</a></button></td>
                                                                    @else
                                                                    <td><button class="btn btn-danger mb-2"><a href="{{ url('/status_module',$module->id) }}">Deactive</a></button></td>
                                                                    @endif
                                                                    

                                                                <td class="">
                                                                        <ul class="table-controls">
                                                                                <a href="{{url('/delete_module',$module->id)}}" class="bs-tooltip"
                                                                                    data-toggle="tooltip" data-placement="top" title=""
                                                                                    data-original-title="Delete Course"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                                        stroke-width="2" stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-trash p-1 br-6 mb-1">
                                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                                        <path
                                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                        </path>
                                                                                    </svg>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                          </div>
                                        </div>
                                      </div>
                    {{-- Chapter --}}
                                      <div class="card">
                                        <div class="card-header" id="headingOne1">
                                          <section class="mb-0 mt-0">
                                            <div role="menu" class="collapsed" data-toggle="collapse" data-target="#defaultAccordionTwo" aria-expanded="true" aria-controls="defaultAccordionOne">
                                              Chapter  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                            </div>
                                          </section>
                                        </div>

                                        <div id="defaultAccordionTwo" class="collapse" aria-labelledby="headingOne1" data-parent="#toggleAccordion">
                                          <div class="card-body">
                                                 @if(Session::has('chapter_success'))
                                                <div class="alert alert-light-success border-0 mb-4" role="alert"> 
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                    </button>
                                                    <strong>Success!</strong> {{Session::get('chapter_success')}}
                                                </div> 
                                                @endif    
                                                <form action="{{ route('addchapter') }}" method="POST">
                                                    @csrf
                                                    <div class="form-group mb-4">
                                                        <input type="text" class="form-control" id="chapter_name" name="chapter_name" placeholder="Chapter Name">
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label for="inputState">Module</label>
                                                        <select id="inputState" name="module_id" class="form-control"  required>
                                                             @foreach ($modules_view as $module_select)
                                                                <option value="{{ $module_select->id }}">{{ $module_select->module_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label for="inputState">Course</label>
                                                        <select id="inputState" name="course_id" class="form-control"  required>
                                                            @foreach ($courses as $course)
                                                                <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @if ($errors->any())
                                                        @foreach ($errors->all() as $err)
                                                            <div class="alert alert-light-danger border-0 mb-4" role="alert"> 
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                                </button>
                                                                <strong>Error!</strong> {{ $err }}
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                    <button type="submit" class="btn btn-primary mt-3 message">Add Chapter</button>
                                                </form>
                                                <div class="col-xl-12 col-lg-12 col-sm-12 mt-5  layout-spacing">
                                                    <div class="widget-content widget-content-area br-6">
                                                        <table id="zero-config-chapter" class="table dt-table-hover" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Chapter Id</th>
                                                                    <th>Module Name</th>
                                                                    <th>Chapter Name</th>
                                                                    <th>Chapter Status</th>
                                                                    <th class="dt-no-sorting">Action</th>
                                                                </tr>
                                                            </thead>
                                                                <tbody>  
                                                                @foreach ($chapters as $chapter)
                                                                    <tr>
                                                                    <td>{{ $chapter-> id}}</td>
                                                                    <td>{{ $chapter-> module_name}}</td>
                                                                    <td>{{ $chapter-> chapter_name }}</td>
                                                                    @if ($chapter-> status == 1)
                                                                    <td><button class="btn btn-success mb-2"><a href="{{ url('/status_chapter',$chapter->id) }}">Active</a></button></td>
                                                                    @else
                                                                    <td><button class="btn btn-danger mb-2"><a href="{{ url('/status_chapter',$chapter->id) }}">Deactive</a></button></td>
                                                                    @endif
                                                                    

                                                                <td class="">
                                                                        <ul class="table-controls">
                                                                                <a href="{{url('/delete_chapter',$chapter->id)}}" class="bs-tooltip"
                                                                                    data-toggle="tooltip" data-placement="top" title=""
                                                                                    data-original-title="Delete Course"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                                        stroke-width="2" stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-trash p-1 br-6 mb-1">
                                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                                        <path
                                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                        </path>
                                                                                    </svg>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                          </div>
                                        </div>
                                      </div>
                    {{-- Topic --}}
                                      <div class="card">
                                        <div class="card-header" id="headingOne1">
                                          <section class="mb-0 mt-0">
                                            <div role="menu" class="collapsed" data-toggle="collapse" data-target="#defaultAccordionThree" aria-expanded="true" aria-controls="defaultAccordionOne">
                                              Topic  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                            </div>
                                          </section>
                                        </div>

                                        <div id="defaultAccordionThree" class="collapse" aria-labelledby="headingOne1" data-parent="#toggleAccordion">
                                          <div class="card-body">
                                                 @if(Session::has('topic_success'))
                                                <div class="alert alert-light-success border-0 mb-4" role="alert"> 
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                    </button>
                                                    <strong>Success!</strong> {{Session::get('topic_success')}}
                                                </div> 
                                                @endif    
                                                <form id="" action="{{ route('addtopic') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group mb-4">
                                                        <input type="text" class="form-control" id="topic_name" name="topic_name" placeholder="Topic Name">
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label for="exampleFormControlTextarea1">Topic Description</label>
                                                        <textarea class="form-control" id="topic_description" name="topic_description" rows="3"></textarea>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label for="inputState">Chapter</label>
                                                        <select id="inputState" name="chapter_id" class="form-control"  required>
                                                            @foreach ($chapters_view as $chapter_select)
                                                                <option value="{{ $chapter_select->id }}">{{ $chapter_select->chapter_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label for="inputState">Module</label>
                                                        <select id="inputState" name="module_id" class="form-control"  required>
                                                            @foreach ($modules_view as $module_select)
                                                                <option value="{{ $module_select->id }}">{{ $module_select->module_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label for="inputState">Course</label>
                                                        <select id="inputState" name="course_id" class="form-control"  required>
                                                            @foreach ($courses as $course)
                                                                <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                     
                                                    @if ($errors->any())
                                                        @foreach ($errors->all() as $err)
                                                            <div class="alert alert-light-danger border-0 mb-4" role="alert"> 
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                                </button>
                                                                <strong>Error!</strong> {{ $err }}
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                    <div class="form-group mb-4">
                                                        <div class="progress br-30">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-3 message">Add Topic</button>
                                                </form>
                                                <div class="col-xl-12 col-lg-12 col-sm-12 mt-5  layout-spacing">
                                                    <div class="widget-content widget-content-area br-6">
                                                        <table id="zero-config-topic" class="table dt-table-hover" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Topic Id</th>
                                                                    <th>Module Name</th>
                                                                    <th>Chapter Name</th>
                                                                    <th>Topic Name</th>
                                                                    <th>Topic Status</th>
                                                                    <th class="dt-no-sorting">Action</th>
                                                                </tr>
                                                            </thead>
                                                                <tbody>  
                                                                @foreach ($topics as $topic)
                                                                    <tr>
                                                                    <td>{{ $topic-> id}}</td>
                                                                    <td>{{ $topic-> module_name}}</td>
                                                                    <td>{{ $topic-> chapter_name }}</td>
                                                                    <td>{{ $topic-> topic_name }}</td>
                                                                    @if ($topic-> status == 1)
                                                                    <td><button class="btn btn-success mb-2"><a href="{{ url('/status_topic',$topic->id) }}">Active</a></button></td>
                                                                    @else
                                                                    <td><button class="btn btn-danger mb-2"><a href="{{ url('/status_topic',$topic->id) }}">Deactive</a></button></td>
                                                                    @endif
                                                                    

                                                                <td class="">
                                                                        <ul class="table-controls">
                                                                                <a href="{{url('/delete_topic',$topic->id)}}" class="bs-tooltip"
                                                                                    data-toggle="tooltip" data-placement="top" title=""
                                                                                    data-original-title="Delete Course"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                                        stroke-width="2" stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-trash p-1 br-6 mb-1">
                                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                                        <path
                                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                        </path>
                                                                                    </svg>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                          </div>
                                        </div>
                                      </div>
                    {{-- Material --}}
                                      <div class="card">
                                        <div class="card-header" id="headingOne1">
                                          <section class="mb-0 mt-0">
                                            <div role="menu" class="collapsed" data-toggle="collapse" data-target="#defaultAccordionFour" aria-expanded="true" aria-controls="defaultAccordionOne">
                                              Materials  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                            </div>
                                          </section>
                                        </div>

                                        <div id="defaultAccordionFour" class="collapse" aria-labelledby="headingOne1" data-parent="#toggleAccordion">
                                          <div class="card-body">
                                                 @if(Session::has('material_success'))
                                                <div class="alert alert-light-success border-0 mb-4" role="alert"> 
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                    </button>
                                                    <strong>Success!</strong> {{Session::get('material_success')}}
                                                </div> 
                                                @endif    
                                                <form id="" action="{{ route('addmaterial') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group mb-4">
                                                        <label for="inputState">Video Material</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="material_video" name="material_video">
                                                            <label class="custom-file-label" for="customFile">Choose Video</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label for="inputState">Document Material</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="material_doc" name="material_doc">
                                                            <label class="custom-file-label" for="customFile">Choose Document</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label for="inputState">Topic</label>
                                                        <select id="inputState" name="topic_id" class="form-control"  required>
                                                            @foreach ($topics_view as $topics_select)
                                                                <option value="{{ $topics_select->id }}">{{ $topics_select->topic_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label for="inputState">Chapter</label>
                                                        <select id="inputState" name="chapter_id" class="form-control"  required>
                                                            @foreach ($chapters_view as $chapter_select)
                                                                <option value="{{ $chapter_select->id }}">{{ $chapter_select->chapter_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                     <div class="form-group mb-4">
                                                        <label for="inputState">Module</label>
                                                        <select id="inputState" name="module_id" class="form-control"  required>
                                                            @foreach ($modules_view as $module_select)
                                                                <option value="{{ $module_select->id }}">{{ $module_select->module_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label for="inputState">Course</label>
                                                        <select id="inputState" name="course_id" class="form-control"  required>
                                                            @foreach ($courses as $course)
                                                                <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    
                                                    
                                                    
                                                    @if ($errors->any())
                                                        @foreach ($errors->all() as $err)
                                                            <div class="alert alert-light-danger border-0 mb-4" role="alert"> 
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                                </button>
                                                                <strong>Error!</strong> {{ $err }}
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                    <div class="form-group mb-4">
                                                        <div class="progress br-30">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-3 message">Add Material</button>
                                                </form>
                                                <div class="col-xl-12 col-lg-12 col-sm-12 mt-5  layout-spacing">
                                                    <div class="widget-content widget-content-area br-6">
                                                        <table id="zero-config-topic" class="table dt-table-hover" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Material Id</th>
                                                                    <th>Topic Name</th>
                                                                    <th>Doc</th>
                                                                    <th>video</th>
                                                                    <th>Material Status</th>
                                                                    <th class="dt-no-sorting">Action</th>
                                                                </tr>
                                                            </thead>
                                                                <tbody>  
                                                                @foreach ($materials as $material)
                                                                    <tr>
                                                                    <td>{{ $material-> id}}</td>
                                                                    <td>{{ $material-> topic_name}}</td>
                                                                    <td>{{ $material-> material_doc }}</td>
                                                                    <td>{{ $material-> material_video }}</td>
                                                                    @if ($material-> status == 1)
                                                                    <td><button class="btn btn-success mb-2"><a href="{{ url('/status_material',$material->id) }}">Active</a></button></td>
                                                                    @else
                                                                    <td><button class="btn btn-danger mb-2"><a href="{{ url('/status_material',$material->id) }}">Deactive</a></button></td>
                                                                    @endif
                                                                    

                                                                <td class="">
                                                                        <ul class="table-controls">
                                                                                <a href="{{url('/delete_material',$material->id)}}" class="bs-tooltip"
                                                                                    data-toggle="tooltip" data-placement="top" title=""
                                                                                    data-original-title="Delete Course"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                                        stroke-width="2" stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-trash p-1 br-6 mb-1">
                                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                                        <path
                                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                        </path>
                                                                                    </svg>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                          </div>
                                        </div>
                                      </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                         {{-- @php
                                    var_dump($modules_views);
                                @endphp --}}
                    @foreach ($courses as $course)
                        <div id="timelineProfile" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> {{ $course -> course_name }}</h4>
                                        </div>
                                    </div>
                                </div>
                                @if ($modules_view -> isEmpty() )
                                    <h1 class="text-center mt-5"> Please Add Course Contents!! </h1>
                                @else
                                    @foreach ($modules_view as $module_view)
                                        <div class="widget-content widget-content-area">
                                            <div class="timeline-simple">
                                                <p class="timeline-title">Module: {{ $module_view -> module_name  }}</p>
                                                @foreach ($chapters_view as $chapter_view)
                                                    @if ($chapter_view-> module_id == $module_view-> id)
                                                        <div class="timeline-list mt-4">
                                                            <p class="meta-update-day">{{ $chapter_view -> chapter_name }}</p>
                                                            @foreach ($topics_view as $topic_view)
                                                                @if ($topic_view -> chapter_id == $chapter_view -> id)
                                                                <div class="timeline-post-content">
                                                                    <div class="user-profile">
                                                                        <img src="{{ asset('admin-assets/assets/img/profile-6.jpg') }}" alt="timeline">
                                                                    </div>
                                                                    <div class="">
                                                                        <h4>{{ $topic_view -> topic_name }}</h4>
                                                                        <p class="meta-time-date">5 sec</p>
                                                                        <div class="">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" class="feather feather-globe">
                                                                                <circle cx="12" cy="12" r="10"></circle>
                                                                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                                                                <path
                                                                                    d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                                                                </path>
                                                                            </svg>
                                                                            <h6 class="">Trending Style</h6>
                                                                            <p class="post-text">{{ $topic_view -> topic_description }}</p>
                                                                            @foreach ($materials_view as $material_view)
                                                                                @if ($material_view -> topic_id == $topic_view -> id)
                                                                                    <div class="post-contributers">
                                                                                        <a href="{{ asset('uploads/'.$material_view -> material_video) }}"><img src="{{ asset('admin-assets/assets/img/profile-6.jpg') }}" alt="timeline"></a>
                                                                                        <a href="{{ asset('uploads/'.$material_view -> material_doc) }}"><img src="{{ asset('admin-assets/assets/img/profile-6.jpg') }}" alt="timeline"></a>
                                                                                    </div>
                                                                                @else
                                                                                    <div class="post-contributers">
                                                                                        <h3> Please Add Topic Materials!! </h3>
                                                                                    </div>
                                                                                @endif
                                                                            @endforeach
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                            @endforeach                                                    
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                
                            </div>
                        </div>
                    @endforeach
                    
                </div>
                </div>
        <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Copyright © 2021 <a target="_blank" href="https://careerpointglobal.com/">CPG</a>,
                            All rights reserved.</p>
                    </div>
                    <div class="footer-section f-section-2">
                        <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                </path>
                            </svg></p>
                    </div>
                </div>

        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('admin-assets/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin-assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin-assets/assets/js/app.js') }}"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('admin-assets/assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <script src="{{ asset('admin-assets/assets/js/components/ui-accordions.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/table/datatable/datatables.js') }}"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script>
        $('#zero-config-module').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        });
    </script>

    <script>
        $('#zero-config-chapter').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        });
    </script>

    <script>
        $('#zero-config-topic').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        });
    </script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>

    <script>
        $(function () {
            $(document).ready(function () {
                $('#addtopic').ajaxForm({
                    beforeSend: function () {
                        var percentage = '0';
                    },
                    uploadProgress: function (event, position, total, percentComplete) {
                        var percentage = percentComplete;
                        $('.progress .progress-bar').css("width", percentage+'%', function() {
                          return $(this).attr("aria-valuenow", percentage) + "%";
                        })
                    },
                    complete: function (xhr) {
                        console.log('File has uploaded');
                    }
                });
            });
        });

         $(document).ready(function(){
            $('#state').change(function(){
            var state = $('#state').val();
            $('#city').html('');
                $.ajax({
                url:'get_module/{id}',
                type:'GET',
                data:{myID:state},
                dataType: "json",
                success:function(data)
                {
                    
                    $.each(data, function(key, city)
                    {     
                    // alert(city.city_name)
                    $('#city').prop('disabled', false).css('background','aliceblue').append('<option value="'+city.id+'">'+city.city_name+'</option>');
                    });
                }
            });
            });
        });
    </script>
</body>

</html>