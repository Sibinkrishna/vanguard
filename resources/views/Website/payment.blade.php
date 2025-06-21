@extends('Website.layouts.front')

@section('content')

 <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="{{ asset('website/assets/images/background/subheader.webp') }}" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
									<h1>Payment</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->


            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">

                            <img src="{{ asset('website/assets/images/icons/indianbank.webp') }}" class="my-3 w-50"/>
                            <p>For payment, please transfer amount to the mentioned account.</p>
                            <a href="" class="btn btn-main p-3 mb-5">PAYU MONEY</a>
                        </div>
                        <div class="col-md-6">
                            <h2>Payment Info</h2>
                            <table class="table bg-white">
  <tbody>
    <tr class="bg-light">
      <td class="text-end fw-bold" style="width: 25%;">Bank</td>
      <td style="width: 5%;">:</td>
      <td>Indian Bank</td>
    </tr>
    <tr>
      <td class="text-end fw-bold">Branch</td>
      <td>:</td>
      <td>Ottapalam</td>
    </tr>
    <tr class="bg-light">
      <td class="text-end fw-bold">IFSC</td>
      <td>:</td>
      <td>IDIB00002599</td>
    </tr>
    <tr>
      <td class="text-end fw-bold">A/C Holder</td>
      <td>:</td>
      <td>Vanguard Communications</td>
    </tr>
    <tr class="bg-light">
      <td class="text-end fw-bold">Current A/C Number</td>
      <td>:</td>
      <td>610 805 5069</td>
    </tr>
  </tbody>
</table>

                        </div>
                    </div>
                </div>
            </section>

@endsection
