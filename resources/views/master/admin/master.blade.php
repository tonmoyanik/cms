<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Admin Dashboard</title>
    <!-- ================= Favicon ================== -->

    <!-- Styles -->
    <link href="{{asset('')}}assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="{{asset('')}}assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="{{asset('')}}assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('')}}assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="{{asset('')}}assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="{{asset('')}}assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="{{asset('')}}assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="{{asset('')}}assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="{{asset('')}}assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('')}}assets/css/lib/helper.css" rel="stylesheet">
    <link href="{{asset('')}}assets/css/style.css" rel="stylesheet">
</head>

<body>

<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="">
                        <!-- <img src="assets/images/logo.png" alt="" /> --><span>Focus</span></a></div>
                <li class="label">Main</li>
                <li><a class="" href="{{route('dashboard')}}"><i class="ti-home"></i>Dashboard</a>
                </li>
                @if(Auth::user()->id == 1)
                <li><a class="sidebar-sub-toggle">User Module <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>

                    <ul>
                        <li><a href="{{route('add-user')}}">Add User</a></li>
                        <li><a href="{{route('manage-user')}}">Manage User</a></li>
                    </ul>
                </li>

                @endif

                <li><a class="sidebar-sub-toggle">Teacher module<span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="uc-calendar.html">Add Teacher</a></li>
                        <li><a href="uc-carousel.html">Manage Teacher</a></li>
                    </ul>
                </li>
                <li><a class="sidebar-sub-toggle">Student Module <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>

                        <li><a href="table-row-select.html">Manage Student</a></li>
                        <li><a href="table-jsgrid.html">Manage Student Course</a></li>
                    </ul>
                </li>
                <li><a class="sidebar-sub-toggle">Course Module<span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="font-themify.html">Manage Course</a></li>
                    </ul>
                </li>
        </div>
    </div>
</div>
<!-- /# sidebar -->

<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="float-left">
                    <div class="hamburger sidebar-toggle">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="float-right">
                    <div class="dropdown dib">
                        <div class="header-icon" data-toggle="dropdown">
                            <i class="ti-bell"></i>
                        </div>
                    </div>
                    <div class="dropdown dib">
                        <div class="header-icon" data-toggle="dropdown">
                            <i class="ti-email"></i>
                            <div class="drop-down dropdown-menu dropdown-menu-right">
                                <div class="dropdown-content-heading">
                                    <span class="text-left">2 New Messages</span>
                                    <a href="email.html">
                                        <i class="ti-pencil-alt pull-right"></i>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                     src="assets/images/avatar/1.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Michael Qin</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                     src="assets/images/avatar/2.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Mr. John</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img class="pull-left m-r-10 avatar-img"
                                                     src="assets/images/avatar/3.jpg" alt="" />
                                                <div class="notification-content">
                                                    <small class="notification-timestamp pull-right">02:34
                                                        PM</small>
                                                    <div class="notification-heading">Michael Qin</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you
                                                        ...</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown dib">
                        <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">John
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                            <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-user"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ti-email"></i>
                                                <span>Inbox</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-settings"></i>
                                                <span>Setting</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                                                <i class="ti-power-off"></i>
                                                <span>Logout</span>
                                                <form action="{{route('logout')}}" method="POST" id="logoutForm">
                                                    @csrf
                                                </form>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            @yield('body')
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear()</script> ©All rights reserved.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-right d-none d-sm-block">
                    Design & Develop by Anik Tonmoy
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- jquery vendor -->
<script src="{{asset('')}}assets/js/lib/jquery.min.js"></script>
<script src="{{asset('')}}assets/js/lib/jquery.nanoscroller.min.js"></script>
<!-- nano scroller -->
<script src="{{asset('')}}assets/js/lib/menubar/sidebar.js"></script>
<script src="{{asset('')}}assets/js/lib/preloader/pace.min.js"></script>
<!-- sidebar -->

<script src="{{asset('')}}assets/js/lib/bootstrap.min.js"></script>
<script src="{{asset('')}}assets/js/scripts.js"></script>
<!-- bootstrap -->

<script src="{{asset('')}}assets/js/lib/calendar-2/moment.latest.min.js"></script>
<script src="{{asset('')}}assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
<script src="{{asset('')}}assets/js/lib/calendar-2/pignose.init.js"></script>


<script src="{{asset('')}}assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
<script src="{{asset('')}}assets/js/lib/weather/weather-init.js"></script>
<script src="{{asset('')}}assets/js/lib/circle-progress/circle-progress.min.js"></script>
<script src="{{asset('')}}assets/js/lib/circle-progress/circle-progress-init.js"></script>
<script src="{{asset('')}}assets/js/lib/chartist/chartist.min.js"></script>
<script src="{{asset('')}}assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
<script src="{{asset('')}}assets/js/lib/sparklinechart/sparkline.init.js"></script>
<script src="{{asset('')}}assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
<script src="{{asset('')}}assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
<!-- scripit init-->
<script src="{{asset('')}}assets/js/dashboard2.js"></script>
</body>

</html>
