@extends('Admin.Layouts.app')
@section('title', 'Edit Customer Details')
@section('content')
<div class="page-header">
    <div class="page-header-left d-flex align-items-center">
        <div class="page-header-title">
            <h5 class="m-b-10">Dashboard</h5>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">@yield('title')</li>
        </ul>
    </div>
    <div class="page-header-right ms-auto">
        <div class="page-header-right-items">
            <div class="d-flex d-md-none">
                <a href="javascript:void(0)" class="page-header-right-close-toggle">
                    <i class="feather-arrow-left me-2"></i>
                    <span>Back</span>
                </a>
            </div>
            <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                <div class="d-flex align-items-center">
                    <div class="me-3">
                    </div>
                    <div class="avatar avatar-sm">
                    </div>
                </div>
            </div>
        </div>
        <div class="d-md-none d-flex align-items-center">
        </div>
    </div>
</div>
<div class="main-content">
    <div class="row">
        <div class="col-xl-12">
            <div class="card stretch stretch-full">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                                <form action="{{ route('admin.customers.update', $customer->id) }}" method="POST" >
                                 @csrf
                                 <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="mb-2">
                                            <label class="form-label">Customer Type:<span class="text-danger">*</span></label>
                                            <select name="type" class="form-control" onchange="toggleFields(this.value)">
                                            <option value="Tracking" {{ $customer->type == 'Tracking' ? 'selected' : '' }}>Tracking Product</option>
                                            <option value="Other" {{ $customer->type == 'Other' ? 'selected' : '' }}>Other Product</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="mb-2">
                                            <label class="form-label">Customer Name <span class="text-danger">*</span></label>
                                            <input type="text" id="name" name="name"  class="form-control" placeholder="Customer Name" value="{{ $customer->name }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="mb-2">
                                            <label class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="text" id="email" name="email"  class="form-control" placeholder="Customer Email" value="{{ $customer->email }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="mb-2">
                                            <label class="form-label">Address <span class="text-danger">*</span></label>
                                            <textarea name="address" class="form-control" placeholder="Address" rows="1">{{ $customer->address }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="mb-2 w-100">
                                            <label class="form-label">Contact-1 <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="contact1" placeholder="Contact Number 1" value="{{ $customer->contact1 }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                       <div class="mb-2 w-100">
                                            <label class="form-label">Contact-2 <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="contact2" placeholder="Contact Number 2" value="{{ $customer->contact2 }}">
                                        </div>
                                    </div>
                                     <div class="row m-0 p-0">
                                        <div class="col-lg-12" id="trackingFields">
                                            <div class="row">
                                                <!-- District -->
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="mb-2">
                                                        <label class="form-label">District <span class="text-danger">*</span></label>
                                                        <input type="text" name="district" class="form-control" value="{{ old('district', $customer->district) }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="mb-2">
                                                        <label class="form-label">Username <span class="text-danger">*</span></label>
                                                        <input type="text" name="username" class="form-control" value="{{ old('username', $customer->username) }}">
                                                    </div>
                                                </div>

                                                <!-- Vehicle Number -->
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="mb-2">
                                                        <label class="form-label">Vehicle Number <span class="text-danger">*</span></label>
                                                        <input type="text" name="vehicle_number" class="form-control" value="{{ old('vehicle_number', $customer->vehicle_number) }}">
                                                    </div>
                                                </div>

                                                <!-- Dealer Type -->
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="mb-2">
                                                        <label class="form-label">Dealer Type <span class="text-danger">*</span></label>
                                                        <select name="dealer_type" class="form-control" onchange="toggleDealerName(this.value)">
                                                            <option value="Direct" {{ old('dealer_type', $customer->dealer_type) == 'Direct' ? 'selected' : '' }}>Direct</option>
                                                            <option value="Dealer" {{ old('dealer_type', $customer->dealer_type) == 'Dealer' ? 'selected' : '' }}>Dealer</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Dealer Name -->
                                                <div class="col-lg-4 col-md-4" id="dealerNameField" style="display: {{ old('dealer_type', $customer->dealer_type) == 'Dealer' ? 'block' : 'none' }};">
                                                    <div class="mb-2">
                                                        <label class="form-label">Dealer Name</label>
                                                        <input type="text" name="dealer_name" class="form-control" value="{{ old('dealer_name', $customer->dealer_name) }}">
                                                    </div>
                                                </div>
                                                 <div class="col-lg-4 col-md-4">
                                                    <div class="mb-2">
                                                        <label class="form-label">Select Software Name <span class="text-danger">*</span></label>
                                                        {{-- <input type="text"  class="form-control"name="software_name" placeholder="Software Name (VTS or GPS)" value="{{ old('software_name') }}"> --}}
                                                        <select name="software_name" class="form-control">
                                                            <option value="GPS" {{ old('software_name',$customer->software_name) == 'GPS' ? 'selected' : '' }}>GPS</option>
                                                            <option value="VTS" {{ old('software_name',$customer->software_name) == 'VTS' ? 'selected' : '' }}>VTS</option>
                                                            <option value="AIS" {{ old('software_name',$customer->software_name) == 'AIS' ? 'selected' : '' }}>AIS</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                {{-- <div class="col-lg-4 col-md-4">
                                                    <div class="mb-2">
                                                        <label class="form-label">Software Name (VTS or GPS) <span class="text-danger">*</span></label>
                                                        <input type="text"  class="form-control"name="software_name" placeholder="Software Name (VTS or GPS)" value="{{ $customer->software_name }}">
                                                    </div>
                                                </div> --}}

                                                <div class="col-lg-4 col-md-4">
                                                    <div class="mb-2">
                                                        <label class="form-label">Installed Date <span class="text-danger">*</span></label>
                                                        <input type="date" class="form-control" name="start_date" placeholder="Installed Date" value="{{ old('start_date', $customer->start_date) }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="mb-2">
                                                        <label class="form-label">Expiry Date <span class="text-danger">*</span></label>
                                                        <input type="date" class="form-control" name="expiry_date" placeholder="Expiry Date" value="{{ old('expiry_date', $customer->expiry_date) }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="mb-2">
                                                        <label class="form-label">IOT SIM Number <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="iot_sim_number" placeholder="IOT SIM Number" value="{{ $customer->iot_sim_number }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="mb-2">
                                                        <label class="form-label">IMEI Number<span class="text-danger">*</span></label>
                                                        <input type="text"  class="form-control"name="imei_number" placeholder="IMEI Number" value="{{ $customer->imei_number }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="mb-2">
                                                        <label class="form-label">Renewal Amount <span class="text-danger">*</span></label>
                                                        <input type="number" class="form-control" step="0.01" name="renewal_amount" placeholder="Renewal Amount" value="{{ $customer->renewal_amount }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="mb-2">
                                                        <label class="form-label">Technician Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="technician_name" placeholder="Technician Name" value="{{ $customer->technician_name }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-lg-6 col-md-6" style="display: none" id="otherFields">
                                        <div class="mb-2">
                                            <label class="form-label">Purchase Details <span class="text-danger">*</span></label>
                                            <textarea name="comment" class="form-control" placeholder="Purchase Details">{{ $customer->comment }}</textarea><br>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 mt-5">
                                        <button type="submit" class="btn btn-primary w-100">Save</button>
                                    </div>
                                </div>
                                </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleFields(value) {
        document.getElementById('trackingFields').style.display = value === 'Tracking' ? 'block' : 'none';
        document.getElementById('otherFields').style.display = value === 'Other' ? 'block' : 'none';
    }

    // Call it on page load using current selected value
    document.addEventListener('DOMContentLoaded', function () {
        toggleFields(document.querySelector('select[name=\"type\"]').value);
    });
</script>
@endsection
