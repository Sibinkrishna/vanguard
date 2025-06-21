
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vanguard Communications</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('website/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('website/assets/css/mdb.min.css') }}" rel="stylesheet" type="text/css" id="mdb">
    <link href="{{ asset('website/assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('website/assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('website/assets/css/coloring.css') }}" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="{{ asset('website/assets/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body onload="initialize()">
 <div id="wrapper">
 <header class="transparent scroll-light has-topbar">
            <div id="topbar" class="topbar-dark text-light">
                <div class="container">
                    <div class="topbar-left xs-hide">
                        <div class="topbar-widget">
                            <div class="topbar-widget"><a href="tel:9447215807"><i class="fa fa-phone"></i>+91-9447215807</a></div>
                            <div class="topbar-widget"><a href="mailto:vanguardkerala.com"><i class="fa fa-envelope"></i>gps@vanguardkerala.com</a></div>
                            <!-- <div class="topbar-widget"><a href="#"><i class="fa fa-clock-o"></i>Mon - Fri 08.00 - 18.00</a></div> -->
                        </div>
                    </div>

                    <div class="topbar-right">
                        <div class="social-icons">
                            <a href="https://web.archive.org/web/20191124011255/https://www.facebook.com/GpsVehicleTracker/" target="_blank"><i class="fab fa-facebook fa-lg"></i></a>

                            <a href="https://web.archive.org/web/20191124011255/https://twitter.com/vanguardkerala" target="_blank"><i class="fab fa-twitter fa-lg"></i></a>

                            {{-- <a href="#"><i class="fab fa-instagram fa-lg"></i></a> --}}
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="{{ route('index') }}" style="text-decoration:none">
                                            <h2 style="color:#ff4444">Vanguard</h2>
                                        </a>

                                        <!-- <a href="#">
                                            <img class="logo-1" src="assets/images/logo-light.png" alt="">
                                            <img class="logo-2" src="assets/images/logo.png" alt="">
                                        </a> -->
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <!--<li><a class="menu-item" href="{{ route('index') }}">Home</a></li>-->
                                    <li><a class="menu-item" href="{{ route('about') }}">About</a></li>
                                    <li><a class="menu-item" href="{{ route('tracking') }}">Tracking</a></li>
                                    <li><a class="menu-item" href="{{ route('solutions') }}">Solutions</a></li>

                                    <li><a class="menu-item" href="{{ route('payment') }}">Payment</a></li>
                                    <li><a class="menu-item" href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="https://orange.gps-trace.com/" class="btn-main" target="_blank">VTS Login</a>

                                </div>
                                <div class="menu_side_area">
                                    <a href="https://trackingkerala.in/" class="btn-main" target="_blank">GPS Login</a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


         <div class="no-bottom no-top" id="content">
            <div id="top"></div>
             <main>
        @yield('content')
    </main>
            </div>



  <!-- Main Content -->



 </div>
 <a
  href="tel:+919876543210"  class="call_float"
  target="_blank"
  rel="noopener noreferrer"
>
  <i class="fas fa-phone call-icon"></i> </a>

   <a
  href="https://wa.me/919876543210"
  class="whatsapp_float"
  target="_blank"
  rel="noopener noreferrer"
>
  <i class="fab fa-whatsapp whatsapp-icon"></i>
</a>
 <!-- content close -->
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <footer class="text-light">
            <div class="container">
                <div class="row g-custom-x">
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>About Vanguard</h5>
                            <p>We provide reliable GPS tracking solutions for individuals and businesses, offering real-time location monitoring, smart alerts, and easy-to-use tools to keep you connected and in control—anytime, anywhere.</p>
                        </div>
                    </div>

                    <style>
    .contact-info li {
        list-style: none;
        position: relative;
        padding-left: 30px;
        margin-bottom: 10px;
    }

    .contact-info li i {
        position: absolute;
        left: 0;
        top: 4px;
        width: 20px;
        text-align: center;
    }

    .contact-info li a {
        color: inherit;
        text-decoration: none;
    }
</style>

<div class="col-lg-3">
    <div class="widget">
        <h5>Contact Info</h5>
        <ul class="contact-info">
            <li>
                <i class="id-color fa fa-map-marker fa-lg"></i>
                <p>Vanguard Communications, 2nd Floor, ABC Building, Ottapalam, Palakkad. PIN 679101.</p>
            </li>
            <li>
                <i class="id-color fa fa-phone fa-lg"></i>
                <p><a href="tel:9447215807">+91-9447215807</a></p>
            </li>
            <li>
                <i class="id-color fa fa-envelope-o fa-lg"></i>
                <p><a href="mailto:gps@vanguardkerala.com">gps@vanguardkerala.com</a></p>
            </li>
            {{-- <li>
                <i class="id-color fa fa-file-pdf-o fa-lg"></i>
                <p><a href="#">Download Brochure</a></p>
            </li> --}}
        </ul>
    </div>
</div>


                    <div class="col-lg-3">


                                <div class="widget">
                                    <h5>Quick Links</h5>
                                    <ul>
                                        <li><a href="{{route('about')}}">About</a></li>
                                        <li><a href="{{route('tracking')}}">Tracking</a></li>
                                        <li><a href="{{ route('solutions') }}">Solutions</a></li>
                                        <li><a href="#">Privacy policy</a></li>
                                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    </ul>
                                </div>

                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Social Network</h5>
                            <div class="social-icons-1 d-flex">
                                <div class="icon-1">
                                <a href=" https://web.archive.org/web/20191124011255/https://www.facebook.com/GpsVehicleTracker/" target="_blank"><i class="fab fa-facebook fa-lg"></i></a>
                                </div>
                                <div class="icon-1">
                                <a href="https://web.archive.org/web/20191124011255/https://twitter.com/vanguardkerala" target="_blank"><i class="fab fa-twitter fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                Copyright 2025 | Vanguard Communications | Powered By
                                <a href="https://tricetechnologies.in" target="_blank" style="padding-left:5px"> Trice Technologies</a>
                                </div>

                                <ul class="menu-simple">
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>




  <script src="{{ asset('website/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('website/assets/js/designesia.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=insert_your_api_key_here&amp;libraries=places&amp;callback=initPlaces" async="" defer=""></script>

</body>

</html>
