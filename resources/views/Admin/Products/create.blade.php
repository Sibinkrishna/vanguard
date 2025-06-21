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
    <div class="col-xxl-12">
        <div class="card stretch stretch-full">
            <div class="card-header">
                <h5 class="card-title">Add New Product</h5>
                <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                    <label for="name" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="5">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price') }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="mb-3">
                                        <label for="featured_image" class="form-label">Featured Image</label>
                                        <input type="file" class="form-control" id="featured_image" name="featured_image" accept="image/*">
                                        <small class="form-text text-muted">Max 2MB. Allowed formats: jpeg, png, jpg, webp.</small>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="mb-3">
                                        <label for="featured_image" class="form-label">Active</label>
                                            <select name="status" id="" class="form-control">
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                             <div class="mb-3">
                                <label for="gallery_images" class="form-label">Image Gallery</label>
                                <input type="file" class="form-control" id="gallery_images" name="images[]" multiple accept="image/*">
                                <small class="form-text text-muted">Upload multiple images for the product gallery. Max 2MB per image.</small>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Product</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<script>
@endsection
