@extends('Website.layouts.front')

@section('content')

<!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="{{ asset('website/assets/images/background/subheader.webp') }}" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
									<h1>Contact Us</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->

            <section aria-label="section">
                <div class="container">
						<div class="row g-custom-x">

							<div class="col-lg-8 mb-sm-30">

							 <h3>Do you have any question?</h3>

        						<form name="contactForm" id="contact_form" class="form-border" method="post" action="{{ route('contact.send') }}" enctype="multipart/form-data">
                                    @csrf
                                        <div class="row">
                                            <div class="col-md-4 mb10">
                                                <div class="field-set">
                                                    <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" value="{{ old('name') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb10">
                                                <div class="field-set">
                                                    <input type="text" name="email" id="email" class="form-control" placeholder="Your Email" value="{{ old('email') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb10">
                                                <div class="field-set">
                                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" value="{{ old('phone') }}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="field-set mb20">
                                            <textarea name="message" id="message" class="form-control" placeholder="Your Message" value="{{ old('message') }}" ></textarea>
                                        </div>
                                        <div class="field-set mb20">
                                            @if(session('success'))
                                                <div class="alert alert-success">{{ session('success') }}</div>
                                            @endif
                                            @if(session('error'))
                                                <div class="alert alert-error">{{ session('error') }}</div>
                                            @endif                                        </div>
                                        <div id='submit' class="mt20">
                                            <input type='submit' id='send_message' value='Send Message' class="btn-main">
                                        </div>


                                    </form>
						</div>

						<div class="col-lg-4">
    <div class="mb30 border rounded p-3">
        <h4>US Office</h4>

        <div class="d-flex align-items-start mt-4">
            <i class="id-color fa fa-map-marker fa-lg me-2 mt-1"></i>
            <p class="mb-0" style="transform: translateY(-10px);">Vanguard Communications,<br> 2nd Floor, ABC Building,<br> Ottapalam, Palakkad,<br> PIN 679101</p>
        </div>

        <div class="d-flex align-items-start mt-2">
            <i class="id-color fa fa-phone fa-lg me-2 mt-1"></i>
            <p class="mb-0" style="transform: translateY(-10px);">+91-9447215807</p>
        </div>

        <div class="d-flex align-items-start mt-3">
            <i class="id-color fa fa-envelope-o fa-lg me-2 mt-1"></i>
            <a href="mailto:gps@vanguardkerala.com" style="color:#4d5b7c;transform: translateY(-10px);" class="mb-0">gps@vanguardkerala.com</a>
        </div>

        <div class="d-flex align-items-start mt-3">
            <i class="id-color fa fa-file-pdf-o fa-lg me-2 mt-1"></i>
            <a href="#" style="color:#4d5b7c;transform: translateY(-10px);" class="mb-0">Download Brochure</a>
        </div>
    </div>
</div>


						</div>
					</div>

            </section>

<div style="width: 100%; height: 100vh;">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.356181572349!2d76.37717457408743!3d10.772719259264077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7d94c1fdf0d13%3A0xa84dbe6b10069a4a!2sVanguard%20communications!5e1!3m2!1sen!2sin!4v1749464664452!5m2!1sen!2sin"
    style="border:0; width:100%; height:100%;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>

@endsection
