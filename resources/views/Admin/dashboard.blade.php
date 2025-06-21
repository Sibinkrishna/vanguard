@extends('Admin.Layouts.app')
@section('content')
<div class="page-header">
    <div class="page-header-left d-flex align-items-center">
        <div class="page-header-title">
            <h5 class="m-b-10">Dashboard</h5>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Dashboard</li>
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
        <!-- [Invoices Awaiting Payment] start -->
        <h2 class="mb-4">Welcome, {{ auth('admin')->user()->name }}</h2>
        <div class="col-xxl-4 col-md-6">
            <div class="card stretch stretch-full">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between mb-4">
                        <div class="d-flex gap-4 align-items-center">
                            <div class="avatar-text avatar-lg bg-gray-200">
                                <i class="feather-dollar-sign"></i>
                            </div>
                            <div>
                                <div class="fs-4 fw-bold text-dark"><span class="counter"></span></div>
                                <h3 class="fs-13 fw-semibold text-truncate-1-line">Total Customers</h3>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="">
                            <i class="feather-more-vertical"></i>
                        </a>
                    </div>
                    <div class="text-center"><h1>{{ $customers }}</h1></div>
                    <div class="pt-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">Customers More </a>
                            <div class="w-100 text-end">
                                <span class="fs-12 text-dark"></span>
                                <span class="fs-11 text-muted">out of </span>
                            </div>
                        </div>
                        <div class="progress mt-2 ht-3">
                            <div class="progress-bar bg-primary" role="progressbar" style="width:%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [Invoices Awaiting Payment] end -->
        <!-- [Converted Leads] start -->
        <div class="col-xxl-4 col-md-6">
            <div class="card stretch stretch-full">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between mb-4">
                        <div class="d-flex gap-4 align-items-center">
                            <div class="avatar-text avatar-lg bg-gray-200">
                                <i class="feather-cast"></i>
                            </div>
                            <div>
                                <div class="fs-4 fw-bold text-dark"><span class="counter"></span></div>
                                <h3 class="fs-13 fw-semibold text-truncate-1-line">Products</h3>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="">
                            <i class="feather-more-vertical"></i>
                        </a>
                    </div>
                    <div class="text-center"><h1>{{ $products }}</h1></div>
                    <div class="pt-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">Products More</a>
                            <div class="w-100 text-end">
                                <span class="fs-12 text-dark">%</span>
                                <span class="fs-11 text-muted">out of </span>
                            </div>
                        </div>
                        <div class="progress mt-2 ht-3">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: %"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [Converted Leads] end -->
        <!-- [Projects In Progress] start -->
        <div class="col-xxl-4 col-md-6">
            <div class="card stretch stretch-full">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between mb-4">
                        <div class="d-flex gap-4 align-items-center">
                            <div class="avatar-text avatar-lg bg-gray-200">
                                <i class="feather-briefcase"></i>
                            </div>
                            <div>
                                <div class="fs-4 fw-bold text-dark"><span class="counter"></span><span class="counter"></span></div>
                                <h3 class="fs-13 fw-semibold text-truncate-1-line">Admins</h3>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="">
                            <i class="feather-more-vertical"></i>
                        </a>
                    </div>
                    <div class="text-center"><h1>{{ $admin }}</h1></div>
                    <div class="pt-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">Admins More </a>
                            <div class="w-100 text-end">
                                <span class="fs-12 text-dark">% out of</span>
                                <span class="fs-11 text-muted"></span>
                            </div>
                        </div>
                        <div class="progress mt-2 ht-3">
                            <div class="progress-bar bg-success" role="progressbar" ></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [Projects In Progress] end -->
        <!-- [Conversion Rate] start -->
        {{-- <div class="col-xxl-3 col-md-6">
            <div class="card stretch stretch-full">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between mb-4">
                        <div class="d-flex gap-4 align-items-center">
                            <div class="avatar-text avatar-lg bg-gray-200">
                                <i class="feather-activity"></i>
                            </div>
                            <div>
                                <div class="fs-4 fw-bold text-dark"><span class="counter">46.59</span>%</div>
                                <h3 class="fs-13 fw-semibold text-truncate-1-line">Conversion Rate</h3>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="">
                            <i class="feather-more-vertical"></i>
                        </a>
                    </div>
                    <div class="pt-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line"> Conversion Rate </a>
                            <div class="w-100 text-end">
                                <span class="fs-12 text-dark">$2,254</span>
                                <span class="fs-11 text-muted">(46%)</span>
                            </div>
                        </div>
                        <div class="progress mt-2 ht-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 46%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- [Conversion Rate] end -->


    </div>
</div>
@endsection

