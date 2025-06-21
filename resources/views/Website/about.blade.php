@extends('Website.layouts.front')

@section('content')

 <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="{{ asset('website/assets/images/background/subheader.webp') }}" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
									<h1>About Us</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->

            <section>
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeInRight about-content">
                            <h2>VANGUARD <span class="id-color">Navigate Your Future</span></h2>
                            <p>Vanguard Communications is a global leader in technology solutions, specializing in advanced automated systems for remote tracking, monitoring, and management. With over 16 years of expertise, we empower businesses across industries to optimize their fleets, vehicles, containers, and other critical assets with precision and efficiency.</p>
                            <p>Our innovative technology ensures seamless operations, enhanced security, and actionable insights, enabling businesses to make informed decisions in real time. At Vanguard Communications, we are committed to driving operational excellence through cutting-edge solutions tailored to meet the evolving demands of our clients worldwide.</p>
                            <p>With a proven track record of excellence and reliability, Vanguard Communications continues to shape the future of remote asset management, delivering value and trust to our global partners.</p>
                        </div>
                        <div class="col-lg-6 wow fadeInRight" data-wow-delay=".25s">
                            <img src="{{ asset('website/assets/images/main/about.webp') }}" alt="about-img" class="w-100 img-border"/>
                        </div>
                    </div>
                </div>

                <div class="container mt-5">
    <div class="row g-5 ">
        <div class="col-md-4 justify-content-center box ">
            <div class="h-100">
                <div class="card-body">
                    <div class="box-title text-center mb-3">
                        <h3>Mission</h3>
                    </div>
                    <div class="box-img mb-3 text-center">
                        <img src="{{ asset('website/assets/images/main/mission.webp') }}" alt="Mission Icon" class="img-fluid" style="max-height: 120px;">
                    </div>
                    <div class="box-content">
                        <p class="text-justify">
                            Our mission is to provide excellent products and services to our customers, meet their needs,
                            and establish a reliable and sustainable reputation in the market.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 justify-content-center box ">
            <div class="h-100">
                <div class="card-body">
                    <div class="box-title text-center mb-3">
                        <h3>Vision</h3>
                    </div>
                    <div class="box-img mb-3 text-center">
                        <img src="{{ asset('website/assets/images/main/vision.webp') }}" alt="Mission Icon" class="img-fluid" style="max-height: 120px;">
                    </div>
                    <div class="box-content">
                        <p class="text-justify">
                            Our vision is to become an industry leader, offering outstanding solutions to our customers, and creating a better living and working environment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 justify-content-center box " style="border-style: none;">
            <div class="h-100" >
                <div class="card-body">
                    <div class="box-title text-center mb-3">
                        <h3>Values</h3>
                    </div>
                    <div class="box-img mb-3 text-center">
                        <img src="{{ asset('website/assets/images/main/value.webp') }}" alt="Mission Icon" class="img-fluid" style="max-height: 120px;">
                    </div>
                    <div class="box-content">
                        <p class="text-justify">
                            Integrity, customer focus, innovation, teamwork, continuous development, and social responsibility are our core values. We prioritize honesty, exceed customer expectations, embrace innovation, collaborate effectively, foster growth, and fulfill our responsibilities to society.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            </section>
@endsection
