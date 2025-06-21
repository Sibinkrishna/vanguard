@extends('Website.layouts.front')

@section('content')

 <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="{{ asset('website/assets/images/background/subheader.webp') }}" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
									<h1>Solutions</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->

 <section id="section-cars" class="">
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
                                        <img src="{{ asset('website/assets/images/products/smart-lock.webp')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="d-info">
                                        <div class="d-text">
                                            <h4>Smart Locks Systems</h4>
                                            <p>Advanced keyless locks with mobile access and real-time alerts for enhanced home and office security.</p>

                                        </div>
                                    </div>
                                    </a>

                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="de-item mb30">
                                     <a href="" style="color:#4D5B7C">
                                    <div class="d-img">
                                        <img src="{{ asset('website/assets/images/products/light.webp')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="d-info">
                                        <div class="d-text">
                                            <h4>Solar Street Light</h4>
                                            <p>Energy-efficient street lighting powered by the sun, with automatic day-night sensors and zero electricity cost.</p>

                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="de-item mb30">
                                    <a href="" style="color:#4D5B7C">
                                    <div class="d-img">
                                        <img src="{{ asset('website/assets/images/products/camera.webp')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="d-info">
                                        <div class="d-text">
                                            <h4>Wireless Security Camera System</h4>
                                            <p>High-definition wired and wireless cameras with remote monitoring and motion detection for complete security.</p>
                                        </div>

                                    </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="de-item mb30">
                                    <a href="" style="color:#4D5B7C">
                                    <div class="d-img">
                                        <img src="{{ asset('website/assets/images/products/soap.webp')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="d-info">
                                        <div class="d-text">
                                            <h4>Automatic Soap Dispenser</h4>
                                            <p>Hands-free soap dispensing for improved hygiene in homes, schools, and public areas.</p>
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
                                        <img src="{{ asset('website/assets/images/products/solar.webp')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="d-info">
                                        <div class="d-text">
                                            <h4>Solar Power for homes</h4>
                                            <p>AEfficient rooftop solar solutions to cut down electricity bills and ensure power backup for homes.</p>

                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>

                        </div>



                    </div>

                    <div class="row g-4 d-none d-md-flex" >
    <div class="col-md-3">
      <div class="de-item">
        <a href="" style="color:#4D5B7C">
          <div class="d-img">
            <img src="{{ asset('website/assets/images/products/smart-lock.webp')}}" class="img-fluid" alt="">
          </div>
          <div class="d-info">
            <div class="d-text">
              <h4>Smart Locks Systems</h4>
              <p>Advanced keyless locks with mobile access and real-time alerts for enhanced home and office security.</p>
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
              <p>Energy-efficient street lighting powered by the sun, with automatic day-night sensors and zero electricity cost.</p>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-3">
      <div class="de-item">
        <a href="" style="color:#4D5B7C">
          <div class="d-img">
            <img src="{{ asset('website/assets/images/products/camera.webp')}}" class="img-fluid" alt="">
          </div>
          <div class="d-info">
            <div class="d-text">
              <h4>CCTV Camera & Wireless Security Camera System</h4>
              <p>High-definition wired and wireless cameras with remote monitoring and motion detection for complete security.</p>
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
              <p>Hands-free soap dispensing for improved hygiene in homes, schools, and public areas.</p>
            </div>
          </div>
        </a>
      </div>
    </div>


  </div>
                </div>



            </section>

@endsection
