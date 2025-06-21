@extends('Website.layouts.front')

@section('content')

<!-- section begin -->
<section id="subheader" class="jarallax text-light">
    <img src="{{ asset('website/assets/images/background/subheader.webp') }}" class="jarallax-img" alt="">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Tracking</h1>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!-- section close -->


<section class="pb-3">
    <div class="container">
        <div class="container">
            <div class="text-center mb-4">
                <h2>Smart Tracking for Everything</h2>
            </div>
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
                <h2>FULL SOLUTION FOR YOUR VEHICLE TRACKING</h2>
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




<section class="pt-4">

    <div class="container">
        <div class="mb-5">
            <h2>Real-Time Tracking Solutions</h2>
            <p>Monitor and manage your assets, vehicles, or personnel with our reliable GPS-based tracking
                systems—ensuring safety, efficiency, and control from anywhere.</p>
            <div class="spacer-20"></div>
        </div>
        <div class="row text-center">
            @forelse ($products as $product)
            <div class="col-md-3 mb-4">
                <div class="track shadow p-3 rounded">
                    <img src="{{ Storage::url($product->featured_image) }}" class="" alt="Product 1">
                    <h4 class="mt-3">{{ $product->name }}</h4>
                    <p>{{ $product->description }}
                    </p>
                </div>
            </div>
            @empty
            @endforelse
        </div>

    </div>
</section>

@endsection
