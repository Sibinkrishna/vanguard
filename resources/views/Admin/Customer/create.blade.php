@extends('Admin.Layouts.app')
@section('title', 'Create Customer')
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
                                <form action="{{ route('admin.customers.store') }}" method="POST">
                                 @csrf
                                 <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="mb-2">
                                            <label class="form-label">Customer Type:<span class="text-danger">*</span></label>
                                            <select name="type" class="form-control" onchange="toggleFields(this.value)">
                                            <option value="Tracking">Tracking Product</option>
                                            <option value="Other">Other Product</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="mb-2">
                                            <label class="form-label">Customer Name <span class="text-danger">*</span></label>
                                            <input type="text" id="name" name="name"  class="form-control" placeholder="Customer Name" value="{{ old('name') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="mb-2">
                                            <label class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="text" id="email" name="email"  class="form-control" placeholder="Customer Email" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="mb-2">
                                            <label class="form-label">Address <span class="text-danger">*</span></label>
                                            <textarea name="address" class="form-control" placeholder="Address" rows="5">{{ old('address') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="mb-2 w-100">
                                            <label class="form-label">Contact-1 <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="contact1" placeholder="Contact Number 1" value="{{ old('contact1') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="mb-2 w-100">
                                            <label class="form-label">Contact-2 <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="contact2" placeholder="Contact Number 2" value="{{ old('contact2') }}">
                                        </div>
                                    </div>
                                     <div class="row m-0 p-0">
                                        <div class="col-lg-12" id="trackingFields">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="mb-2">
                                                        <label class="form-label">IOT SIM Number <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="iot_sim_number" placeholder="IOT SIM Number" value="{{ old('iot_sim_number') }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="mb-2">
                                                        <label class="form-label">Installed Date <span class="text-danger">*</span></label>
                                                        <input type="date" class="form-control" name="start_date" placeholder="Installed Date" value="{{ old('start_date') }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="mb-2">
                                                        <label class="form-label">Expiry Date <span class="text-danger">*</span></label>
                                                        <input type="date" class="form-control" name="expiry_date" placeholder="Expiry Date" value="{{ old('expiry_date') }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="mb-2">
                                                        <label class="form-label">Software Name (VTS or GPS) <span class="text-danger">*</span></label>
                                                        <input type="text"  class="form-control"name="software_name" placeholder="Software Name (VTS or GPS)" value="{{ old('software_name') }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="mb-2">
                                                        <label class="form-label">Renewal Amount <span class="text-danger">*</span></label>
                                                        <input type="number" class="form-control" step="0.01" name="renewal_amount" placeholder="Renewal Amount" value="{{ old('renewal_amount') }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="mb-2">
                                                        <label class="form-label">Technician Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="technician_name" placeholder="Technician Name" value="{{ old('technician_name') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-lg-6 col-md-6" style="display: none" id="otherFields">
                                        <div class="mb-2">
                                            <label class="form-label">Purchase Details <span class="text-danger">*</span></label>
                                            <textarea name="comment" class="form-control" placeholder="Purchase Details">{{ old('comment') }}</textarea><br>
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
    value = value.toLowerCase(); // Make the comparison case-insensitive

    document.getElementById('trackingFields').style.display = value === 'tracking' ? 'block' : 'none';
    document.getElementById('otherFields').style.display = value === 'other' ? 'block' : 'none';
}
</script>

@endsection
