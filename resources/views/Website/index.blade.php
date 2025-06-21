@extends('Website.layouts.front')

@section('content')



<section id="de-carousel" class="no-top no-bottom carousel slide carousel-fade" data-mdb-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators z1000">
        <li data-mdb-target="#de-carousel" data-mdb-slide-to="0" class="active"></li>
        <li data-mdb-target="#de-carousel" data-mdb-slide-to="1"></li>
        <li data-mdb-target="#de-carousel" data-mdb-slide-to="2"></li>
    </ol>

    <!-- Inner -->
    <div class="carousel-inner position-relative">
        <!-- Single item -->
        <div class="carousel-item active jarallax">
            <img src="{{ asset('website/assets/images/slider/slider-1.webp')}}" class="jarallax-img" alt="">
            <div class="mask">
                <div class="no-top no-bottom">
                    <div class="h-100 v-center">
                        <div class="container">
                            <div class="row gx-5 align-items-center">
                                <div class="col-lg-6 offset-lg-3 text-center mb-sm-30">
                                    <h1 class="s3 mb-3 wow fadeInUp text-white lh-1">Track Anything, Anytime, Anywhere
                                    </h1>
                                    <p class="lead wow fadeInUp text-white" data-wow-delay=".3s">Monitor your vehicles,
                                        assets, or loved ones in real time from any device.</p>
                                    <div class="spacer-10"></div>
                                    <a class="btn-line mb10 wow fadeInUp text-white border-white" data-wow-delay=".6s"
                                        href="{{ route('contact') }}">Enquire Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item jarallax">
            <img src="{{ asset('website/assets/images/slider/slider-2.webp')}}" class="jarallax-img" alt="">
            <div class="mask">
                <div class="no-top no-bottom">
                    <div class="h-100 v-center">
                        <div class="container">
                            <div class="row gx-5 align-items-center">
                                <div class="col-lg-6 offset-lg-3 text-center mb-sm-30">
                                    <h1 class="s3 mb-3 wow fadeInUp text-white lh-1">Peace of Mind, On the Move</h1>
                                    <p class="lead wow fadeInUp text-white" data-wow-delay=".3s">Protect your family and
                                        track their location with precision and confidence.</p>
                                    <div class="spacer-10"></div>
                                    <a class="btn-line mb10 wow fadeInUp text-white border-white" data-wow-delay=".6s"
                                        href="{{ route('contact') }}">Enquire Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item jarallax">
            <img src="{{ asset('website/assets/images/slider/slider-3.webp')}}" class="jarallax-img" alt="">
            <div class="mask">
                <div class="no-top no-bottom">
                    <div class="h-100 v-center">
                        <div class="container">
                            <div class="row gx-5 align-items-center">
                                <div class="col-lg-6 offset-lg-3 text-center mb-sm-30">
                                    <h1 class="s3 mb-3 wow fadeInUp text-white lh-1">Smarter Fleet. Safer Roads.</h1>
                                    <p class="lead wow fadeInUp text-white" data-wow-delay=".3s">Optimize routes, reduce
                                        fuel costs, and manage your entire fleet from one dashboard.</p>
                                    <div class="spacer-10"></div>
                                    <a class="btn-line mb10 wow fadeInUp text-white border-white" data-wow-delay=".6s"
                                        href="{{ route('contact') }}">Enquire Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Inner -->

    <!-- Controls -->
    <a class="carousel-control-prev" href="#de-carousel" role="button" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#de-carousel" role="button" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <div class="de-gradient-edge-bottom"></div>
</section>

<section class="pb-3">
    <div class="container">
        <div class="container">

            <div class="row mt-3">
                <div class="col-6 col-md-2 vehicle p-2">
                    <img src="{{ asset('website/assets/images/vehicles/vehicle-1.png') }}" class="" />
                </div>
                <div class="col-6 col-md-2 vehicle p-2">
                    <img src="{{ asset('website/assets/images/vehicles/vehicle-2.png') }}" class="" />
                </div>
                <div class="col-6 col-md-2 vehicle p-2">
                    <img src="{{ asset('website/assets/images/vehicles/vehicle-3.png') }}" class="" />
                </div>
                <div class="col-6 col-md-2 vehicle p-2">
                    <img src="{{ asset('website/assets/images/vehicles/vehicle-4.png') }}" class="" />
                </div>
                <div class="col-6 col-md-2 vehicle p-2">
                    <img src="{{ asset('website/assets/images/vehicles/vehicle-5.png') }}" class="" />
                </div>
                <div class="col-6 col-md-2 vehicle p-2 last">
                    <img src="{{ asset('website/assets/images/vehicles/vehicle-6.png') }}" class="" />
                </div>
            </div>

        </div>

    </div>
</section>
<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>Smart Tracking for Everything</h2>
                <p>Our GPS tracker, featuring a professional GPS server and dedicated SIM card, ensures real-time
                    accuracy and offers free, fast support.
                    We offer a full telematics solution</p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-6 col-md-6">
                        <div class="solutions text-center">
                            <img src="{{ asset('website/assets/images/icons/fleet.png') }}" class="img-fluid mb-2"
                                alt="Fleet Icon" style="max-width: 80px;" />
                            <h3 class="h5">Fleet Management<br> Solution</h3>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="solutions text-center">
                            <img src="{{ asset('website/assets/images/icons/video.png') }}" class="img-fluid mb-2"
                                alt="Fleet Icon" style="max-width: 80px;" />
                            <h3 class="h5">Video Telematics<br> Solution</h3>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="solutions text-center">
                            <img src="{{ asset('website/assets/images/icons/fuel.png') }}" class="img-fluid mb-2"
                                alt="Fleet Icon" style="max-width: 80px;" />

                            <h3 class="h5">Fuel Monitoring<br> Solution</h3>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="solutions text-center">
                            <img src="{{ asset('website/assets/images/icons/agriculture.png') }}" class="img-fluid mb-2"
                                alt="Fleet Icon" style="max-width: 80px;" />

                            <h3 class="h5">Smart Agriculture <br> Solutions</h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- DESKTOP VIEW: 4-column grid -->
<section class="pb-5 pt-0">

    <div class="container my-4 d-none d-md-block">
        <div class="mb-5">
            <h2>Products</h2>
            <p>Below mentioned are few among the top selling products.
                To know detailed info / custom requirements, please feel free to contact us.</p>
            <div class="spacer-20"></div>
        </div>
        <div class="row text-center">
            @forelse ($products as $product)
                <div class="col-md-3 prod">
                <img src="{{ Storage::url($product->featured_image) }}" class="" alt="Product 1">
                <h4 class="mt-3">{{ $product->name }}</h4>
            </div>
            @empty

            @endforelse
        </div>
    </div>

    <!-- MOBILE VIEW: Bootstrap Carousel -->
    <div class="container">
        <div class="mb-5 d-block d-md-none">
            <h2>Products</h2>

            <div class="spacer-20"></div>
        </div>
    </div>
    <div id="productCarousel" class="carousel slide d-block d-md-none" data-bs-ride="carousel">
        <div class="carousel-inner text-center">
            <div class="carousel-item active">
                <img src="{{ asset('website/assets/images/products/gps1.webp') }}" class="d-block w-100"
                    alt="Product 1">
                <h4 class="mt-3">Vehicle GPS Tracker</h4>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('website/assets/images/products/gps2.webp') }}" class="d-block w-100"
                    alt="Product 2">
                <h4 class="mt-3">Handheld GPS Navigator</h4>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('website/assets/images/products/gps4.webp') }}" class="d-block w-100"
                    alt="Product 3">
                <h4 class="mt-3">Pet GPS Tracker</h4>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('website/assets/images/products/gps3.webp') }}" class="d-block w-100"
                    alt="Product 4">
                <h4 class="mt-3">Asset & Fleet Management GPS System</h4>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

</section>



<section id="section-cars" class="pt-0">
    <div class="container">
        <div class="mb-5">
            <h2>Solutions</h2>

        </div>
        <div class="row align-items-center">


            <div id="items-carousel" class="owl-carousel wow fadeIn d-block d-md-none">

                <div class="col-lg-12">
                    <div class="de-item mb30">
                        <a href="" style="color:#4D5B7C">
                            <div class="d-img">
                                <img src="{{ asset('website/assets/images/products/smart-lock.webp')}}"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>Smart Locks Systems</h4>
                                    <p>Advanced keyless locks with mobile access and real-time alerts for enhanced home
                                        and office security.</p>

                                </div>
                            </div>
                        </a>

                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="de-item mb30">
                        <a href="" style="color:#4D5B7C">
                            <div class="d-img">
                                <img src="{{ asset('website/assets/images/products/light.webp')}}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>Solar Street Light</h4>
                                    <p>Energy-efficient street lighting powered by the sun, with automatic day-night
                                        sensors and zero electricity cost.</p>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="de-item mb30">
                        <a href="" style="color:#4D5B7C">
                            <div class="d-img">
                                <img src="{{ asset('website/assets/images/products/camera.webp')}}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>Wireless Security Camera System</h4>
                                    <p>High-definition wired and wireless cameras with remote monitoring and motion
                                        detection for complete security.</p>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="de-item mb30">
                        <a href="" style="color:#4D5B7C">
                            <div class="d-img">
                                <img src="{{ asset('website/assets/images/products/soap.webp') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>Automatic Soap Dispenser</h4>
                                    <p>Hands-free soap dispensing for improved hygiene in homes, schools, and public
                                        areas.</p>
                                    <div class="d-price mt-5">

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>




                <div class="col-lg-12">
                    <div class="de-item mb30">
                        <a href="" style="color:#4D5B7C">
                            <div class="d-img">
                                <img src="{{ asset('website/assets/images/products/solar.webp')}}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>Solar Power for homes</h4>
                                    <p>AEfficient rooftop solar solutions to cut down electricity bills and ensure power
                                        backup for homes.</p>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>



        </div>

        <div class="row g-4 d-none d-md-flex">
            <div class="col-md-3">
                <div class="de-item">
                    <a href="" style="color:#4D5B7C">
                        <div class="d-img">
                            <img src="{{ asset('website/assets/images/products/smart-lock.webp')}}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="d-info">
                            <div class="d-text">
                                <h4>Smart Locks Systems</h4>
                                <p>Advanced keyless locks with mobile access and real-time alerts for enhanced home and
                                    office security.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="de-item">
                    <a href="" style="color:#4D5B7C">
                        <div class="d-img">
                            <img src="{{ asset('website/assets/images/products/light.webp')}}" class="img-fluid" alt="">
                        </div>
                        <div class="d-info">
                            <div class="d-text">
                                <h4>Solar Street Light</h4>
                                <p>Energy-efficient street lighting powered by the sun, with automatic day-night sensors
                                    and zero electricity cost.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="de-item">
                    <a href="" style="color:#4D5B7C">
                        <div class="d-img">
                            <img src="{{ asset('website/assets/images/products/camera.webp')}}" class="img-fluid"
                                alt="">
                        </div>
                        <div class="d-info">
                            <div class="d-text">
                                <h4>CCTV Camera & Wireless Security Camera System</h4>
                                <p>High-definition wired and wireless cameras with remote monitoring and motion
                                    detection for complete security.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="de-item">
                    <a href="" style="color:#4D5B7C">
                        <div class="d-img">
                            <img src="{{ asset('website/assets/images/products/soap.webp')}}" class="img-fluid" alt="">
                        </div>
                        <div class="d-info">
                            <div class="d-text">
                                <h4>Automatic Soap Dispenser</h4>
                                <p>Hands-free soap dispensing for improved hygiene in homes, schools, and public areas.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>


        </div>
    </div>



</section>



<section aria-label="section" class="pt-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-3 text-center">
                <h2>Features</h2>

                <div class="spacer-20"></div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-3">
                <div class="box-icon s2 p-small mb20 wow fadeInRight" data-wow-delay=".5s">
                    <i class="fa-solid fa-location-dot fa-2x bg-color mb-2"></i>
                    <div class="d-inner">
                        <h4>Location Tracking</h4>

                    </div>
                </div>
                <div class="box-icon s2 p-small mb20 wow fadeInL fadeInRight" data-wow-delay=".75s">
                    <i class="fa-solid fa-clock-rotate-left fa-2x bg-color"></i>
                    <div class="d-inner">
                        <h4>History Playback</h4>

                    </div>
                </div>
                <div class="box-icon s2 p-small mb20 wow fadeInL fadeInRight" data-wow-delay=".75s">
                    <i class="fa-solid fa-gauge-high fa-2x bg-color"></i>
                    <div class="d-inner">
                        <h4>Mileage Statistics</h4>

                    </div>
                </div>
                <div class="box-icon s2 p-small mb20 wow fadeInL fadeInRight" data-wow-delay=".75s">
                    <i class="fa-solid fa-power-off fa-2x bg-color"></i>
                    <div class="d-inner">
                        <h4>Remote Engine cut-off</h4>

                    </div>
                </div>
                <div class="box-icon s2 p-small mb20 wow fadeInL fadeInRight" data-wow-delay=".75s">
                    <i class="fa-solid fa-key fa-2x bg-color"></i>
                    <div class="d-inner">
                        <h4>ACC ignition detection</h4>

                    </div>
                </div>
                <div class="box-icon s2 p-small mb20 wow fadeInL fadeInRight" data-wow-delay=".75s">
                    <i class="fa-solid fa-lock-open fa-2x bg-color"></i>
                    <div class="d-inner">
                        <h4>lock/unlock doors</h4>

                    </div>
                </div>

                <div class="box-icon s2 p-small mb20 wow fadeInL fadeInRight" data-wow-delay=".75s">
                    <i class="fas fa-chart-line fa-2x bg-color"></i>
                    <div class="d-inner">
                        <h4>Customizable Reports</h4>

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <img src="{{ asset('website/assets/images/misc/location.png') }}" alt="" class="img-fluid wow fadeInUp">
            </div>

            <div class="col-lg-3">
                <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1s">
                    <i class="fa-solid fa-tachograph-digital fa-2x bg-color"></i>
                    <div class="d-inner">
                        <h4>Overspeed Detection</h4>

                    </div>
                </div>
                <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1.25s">
                    <i class="fa-solid fa-bell fa-2x bg-color"></i>
                    <div class="d-inner">
                        <h4>Alarms</h4>

                    </div>
                </div>
                <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1.25s">
                    <i class="fa-solid fa-map fa-2x bg-color"></i>
                    <div class="d-inner">
                        <h4>Multiple Maps</h4>

                    </div>
                </div>
                <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1.25s">
                    <i class="fa-solid fa-draw-polygon fa-2x bg-color"></i>
                    <div class="d-inner">
                        <h4>Geo-fencing</h4>

                    </div>
                </div>
                <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1.25s">
                    <i class="fa-solid fa-database fa-2x bg-color"></i>
                    <div class="d-inner">
                        <h4>Remote reading of tachograph data</h4>

                    </div>
                </div>
                <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1.25s">
                    <i class="fa-solid fa-book fa-2x bg-color"></i>
                    <div class="d-inner">
                        <h4>Logbook</h4>

                    </div>
                </div>

                <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1.25s">
                    <i class="fas fa-bell fa-2x bg-color"></i>
                    <div class="d-inner">
                        <h4>Alerts & Notifications</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="text-light jarallax">
    <img src="{{ asset('website/assets/images/background/2.webp') }}" class="jarallax-img" alt="">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInRight">
                <h2>VANGUARD <br><span class="id-color">Navigate your future</span></h2>
            </div>
            <div class="col-lg-6 wow fadeInLeft">
                Vanguard Communications is a global technology company specializing in
                automated systems for remote tracking, monitoring and management of fleets,
                vehicles, containers, assets, and much more.
            </div>
        </div>
        <div class="spacer-double"></div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6 mb-sm-30">
                <div class="de_count transparent text-light wow fadeInUp">
                    <h3 class="timer" data-to="15425" data-speed="3000">0</h3>
                    Implimented Projects
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-sm-30">
                <div class="de_count transparent text-light wow fadeInUp">
                    <h3 class="timer" data-to="20325" data-speed="3000">0</h3>
                    Happy Customers
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-sm-30">
                <div class="de_count transparent text-light wow fadeInUp">
                    <h3 class="timer" data-to="29598" data-speed="3000">0</h3>
                    Vehicles
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-sm-30">
                <div class="de_count transparent text-light wow fadeInUp">
                    <h3 class="timer" data-to="15" data-speed="3000">0</h3>
                    Years Experience
                </div>
            </div>
        </div>
    </div>
</section>




<div class="container py-5">
    <h2 class="mb-4 fw-bold">Product Advantages</h2>
    <div class="row">

        <div class="col-md-6">
            <div class="advantage-card">
                <div class="advantage-icon d-flex">
                    <i class="fas fa-shield-alt"></i>
                    <h3 class="advantage-title">Reliability</h3>
                </div>

                <p>We offer comprehensive solutions that effectively address customer issues by integrating software and
                    hardware. Each tracker is equipped with a backup battery to enhance client security.</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="advantage-card">
                <div class="advantage-icon d-flex">
                    <i class="fas fa-arrows-alt"></i>
                    <h3 class="advantage-title">Expansibility</h3>
                </div>

                <p>We provide flexible solutions that can be adjusted to pinpoint the client’s needs. Our devices have
                    basic positioning functions and can also be utilized for more complex solutions by incorporating
                    various accessories.</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="advantage-card">
                <div class="advantage-icon d-flex">
                    <i class="fas fa-plug"></i>
                    <h3 class="advantage-title">Compatibility</h3>
                </div>

                <p>All devices are compatible with third-party platforms and can be used with a range of vehicles. To
                    meet customer requirements, we offer specialized devices for motorcycles, cars, trucks, buses, and
                    agricultural equipment.</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="advantage-card">
                <div class="advantage-icon d-flex">
                    <i class="fas fa-tools"></i>
                    <h3 class="advantage-title">Durability</h3>
                </div>

                <p>Our strict quality control process ensures that the products our customers receive are durable and of
                    high quality.</p>
            </div>
        </div>

    </div>
</div>


<section class="text-light jarallax" aria-label="section">
    <img src="{{ asset('website/assets/images/background/16.webp')}}" alt="" class="jarallax-img"
        style="filter: blur(5px);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Let's Your Tracking Journey Begin</h1>
                <div class="spacer-20"></div>
            </div>
            <div class="col-md-4">
                <i class="fa fa-trophy de-icon mb20"
                    style="position: relative;left: 50%;transform: translateX(-50%);"></i>
                <h4 class="text-center">Advanced GPS Tracking Services</h4>
                <p class="text-justify">Where cutting-edge technology meets reliability—ensuring safety, control, and
                    real-time visibility of what matters most.</p>
            </div>
            <div class="col-md-4">
                <i class="fa fa-road de-icon mb20"
                    style="position: relative;left: 50%;transform: translateX(-50%);"></i>
                <h4 class="text-center">24/7 Real-Time Monitoring</h4>
                <p class="text-justify">Get round-the-clock location updates and tracking precision to stay informed
                    anytime, anywhere.</p>
            </div>
            <div class="col-md-4">
                <i class="fa fa-map-pin de-icon mb20"
                    style="position: relative;left: 50%;transform: translateX(-50%);"></i>
                <h4 class="text-center">Instant Alerts & Notifications</h4>
                <p class="text-justify">Receive immediate alerts for speed, zone exits, ignition status, and more—right
                    to your phone or email.</p>
            </div>
        </div>
    </div>
</section>

<!-- <section id="section-news d-none">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <h2>Enhance Your Tracking Experience</h2>
                            <p>Discover how smart GPS solutions can improve safety, efficiency, and peace of mind for both personal and business needs.</p>
                            <div class="spacer-20"></div>
                        </div>

                        <div class="col-lg-4 mb10">
                            <div class="bloglist s2 item">
                                <div class="post-content">
                                    <div class="post-image">
                                        <div class="date-box">
                                            <div class="m">10</div>
                                            <div class="d">MAR</div>
                                        </div>
                                        <img alt="" src="assets/images/news/pic-blog-1.jpg" class="lazy">
                                    </div>
                                    <div class="post-text">
                                        <h4><a href="news-single.html">Why GPS Tracking Is Essential in 2025<span></span></a></h4>
                                        <p>Explore how GPS technology is transforming industries with real-time monitoring, route optimization, and improved asset security.</p>
                                        <a class="btn-main" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb10">
                            <div class="bloglist s2 item">
                                <div class="post-content">
                                    <div class="post-image">
                                        <div class="date-box">
                                            <div class="m">12</div>
                                            <div class="d">MAR</div>
                                        </div>
                                        <img alt="" src="assets/images/news/pic-blog-2.webp" class="lazy">
                                    </div>
                                    <div class="post-text">
                                        <h4><a href="news-single.html">The Future of Fleet Management<span></span></a></h4>
                                        <p>Learn how modern GPS tracking tools help manage fleets efficiently, reduce fuel costs, and ensure timely deliveries.</p>
                                        <a class="btn-main" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb10">
                            <div class="bloglist s2 item">
                                <div class="post-content">
                                    <div class="post-image">
                                        <div class="date-box">
                                            <div class="m">14</div>
                                            <div class="d">MAR</div>
                                        </div>
                                        <img alt="" src="assets/images/news/pic-blog-3.jpg" class="lazy">
                                    </div>
                                    <div class="post-text">
                                        <h4><a href="news-single.html">Top GPS Tracking Tips for New Users<span></span></a></h4>
                                        <p>Just getting started? Here are expert tips to help you get the most out of your tracking system from day one.</p>
                                        <a class="btn-main" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

<section id="section-faq">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>Have Any Questions?</h2>
                <div class="spacer-20"></div>
            </div>
        </div>
        <div class="row g-custom-x">
            <div class="col-md-6 wow fadeInUp">
                <div class="accordion secondary">
                    <div class="accordion-section">
                        <div class="accordion-section-title" data-tab="#accordion-1">
                            How do I get started with GPS tracking?
                        </div>
                        <div class="accordion-section-content" id="accordion-1">
                            <p>Simply choose a plan, register your device, and start tracking through our easy-to-use
                                dashboard.</p>
                        </div>
                        <div class="accordion-section-title" data-tab="#accordion-2">
                            Can I use my own GPS device?
                        </div>
                        <div class="accordion-section-content" id="accordion-2">
                            <p>Yes, our platform supports most GPS hardware. We also provide setup assistance.</p>
                        </div>
                        <div class="accordion-section-title" data-tab="#accordion-3">
                            What kind of tracking plans are available?
                        </div>
                        <div class="accordion-section-content" id="accordion-3">
                            <p>We offer plans for personal use, vehicle fleets, asset tracking, and enterprise
                                solutions.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 wow fadeInUp">
                <div class="accordion secondary">
                    <div class="accordion-section">
                        <div class="accordion-section-title" data-tab="#accordion-b-4">
                            Is there a setup or activation fee?
                        </div>
                        <div class="accordion-section-content" id="accordion-b-4">
                            <p>No hidden charges. Most plans include free setup and onboarding.</p>
                        </div>
                        <div class="accordion-section-title" data-tab="#accordion-b-5">
                            Can I track multiple vehicles or assets?
                        </div>
                        <div class="accordion-section-content" id="accordion-b-5">
                            <p>Absolutely! Our platform supports tracking for multiple units under a single account.</p>
                        </div>
                        <div class="accordion-section-title" data-tab="#accordion-b-6">
                            Can I pause or cancel my subscription?
                        </div>
                        <div class="accordion-section-content" id="accordion-b-6">
                            <p>Yes, you can cancel, upgrade, or downgrade your plan anytime from your dashboard.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section id="section-call-to-action" class="bg-color-2 pt60 pb60 text-light">-->
<!--    <div class="container">-->
<!--        <div class="container">-->
<!--        <div class="row">-->

<!--            <div class="col-lg-6">-->

<!--                <h3>Thank you for visiting Vanguard Communications.</h3>-->
<!--                <h4>We welcome your questions, comments and suggestions.</h4>-->
<!--                <h4>If you would like to have someone from our office contact you, please e-mail us</h4>-->
<!--                <h4>gps@vanguardkerala.com</h4>-->
<!-- <h2 class="s2">Rentaly customer care is here to help you anytime.</h2> -->
<!--            </div>-->

<!--            <div class="col-lg-6 text-lg-center text-sm-center">-->
<!--                <div class="phone-num-big">-->
<!--                    <i class="fa fa-phone"></i>-->
<!--                    <span class="pnb-text">-->
<!--                        Call Us Now-->
<!--                    </span>-->
<!--                    <span class="pnb-num">-->
<!--                       +91-9447215807-->
<!--                    </span>-->
<!--                </div>-->
<!--                <a href="#" class="btn-main">Contact Us</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    </div>-->
<!--</section>-->

@endsection
