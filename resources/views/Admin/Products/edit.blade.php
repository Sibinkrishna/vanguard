@extends('Admin.Layouts.app')
@section('title', 'Edit Product') {{-- Changed title to match content --}}
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
                <h5 class="card-title">Edit Product: {{ $product->name }}</h5>
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

                {{-- Re-enable these if you want traditional Laravel alerts for session messages --}}
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                    <label for="name" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="5">{{ old('description', $product->description) }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price', $product->price) }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label for="featured_image" class="form-label">Featured Image</label>
                                    <div class="mb-3">

                                        @if ($product->featured_image)
                                            <div class="position-relative d-inline-block" id="featured-image-container">
                                                <img src="{{ Storage::url($product->featured_image) }}" alt="Featured Image" class="img-thumbnail me-2" style="max-width: 200px;">
                                                <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-1" onclick="removeFeaturedImage()" title="Remove Featured Image">
                                                    <i class="feather-x-circle"></i>
                                                </button>
                                            </div>
                                            <input type="hidden" name="delete_featured_image_flag" id="delete_featured_image_flag" value="0">
                                            <small class="form-text text-muted d-block">Click 'X' to remove current featured image (changes upon update).</small>
                                        @endif
                                        <input type="file" class="form-control mt-2" id="featured_image" name="featured_image" accept="image/*">
                                        <small class="form-text text-muted">Upload a new featured image. Max 2MB. Allowed formats: jpeg, png, jpg, webp.</small>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-select" id="status" name="status" required>
                                            <option value="1" {{ old('status', $product->status) == 1 ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ old('status', $product->status) == 0 ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Current Image Gallery</label>
                                <div class="row row-cols-1 row-cols-md-4 g-2 mb-2" id="gallery-images-container">
                                    @forelse ($product->images as $image)
                                        <div class="col position-relative" id="gallery-image-{{ $image->id }}">
                                            <img src="{{ Storage::url($image->image_path) }}" class="img-thumbnail" style="max-width: 150px; max-height: 150px; object-fit: cover;">
                                            <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-1" onclick="deleteGalleryImageAjax({{ $image->id }})" title="Remove Image">
                                                <i class="feather-x-circle"></i>
                                            </button>
                                        </div>
                                    @empty
                                        <div class="col" id="no-gallery-images"><p>No gallery images.</p></div>
                                    @endforelse
                                </div>

                                <label for="gallery_images" class="form-label">Add More Images to Gallery</label>
                                <input type="file" class="form-control" id="gallery_images" name="images[]" multiple accept="image/*">
                                <small class="form-text text-muted">Upload more images for the product gallery. Max 2MB per image.</small>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Product</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@push('scripts') {{-- Pushing scripts to the 'scripts' stack defined in the layout --}}
<script>
    // --- Featured Image Removal (Still requires form submission) ---
    function removeFeaturedImage() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You are about to remove the featured image. This change will be applied when you click 'Update Product'.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, remove it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('featured-image-container').remove();
                document.getElementById('delete_featured_image_flag').value = 1;
                document.getElementById('featured_image').value = ''; // Clear file input
                Swal.fire(
                    'Removed!',
                    'Featured image marked for removal.',
                    'success'
                );
            }
        });
    }

    // --- Gallery Image Removal (AJAX - immediate deletion) ---
    function deleteGalleryImageAjax(imageId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You are about to permanently delete this gallery image. This action cannot be undone!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                fetch('{{ route('admin.product-images.destroy', '') }}/' + imageId, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        // If response is not 2xx, parse error message from JSON
                        return response.json().then(err => { throw new Error(err.message || 'Server error'); });
                    }
                    return response.json();
                })
                .then(data => {
                    document.getElementById(`gallery-image-${data.image_id}`).remove();
                    Swal.fire(
                        'Deleted!',
                        data.message || 'Image deleted successfully!',
                        'success'
                    );

                    // If no more images, show "No gallery images."
                    const galleryContainer = document.getElementById('gallery-images-container');
                    const imageElements = galleryContainer.querySelectorAll('.col.position-relative');
                    if (imageElements.length === 0 && !document.getElementById('no-gallery-images')) {
                         const noImagesDiv = document.createElement('div');
                         noImagesDiv.className = 'col';
                         noImagesDiv.id = 'no-gallery-images';
                         noImagesDiv.innerHTML = '<p>No gallery images.</p>';
                         galleryContainer.appendChild(noImagesDiv);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire(
                        'Error!',
                        'Error deleting image: ' + error.message,
                        'error'
                    );
                });
            }
        });
    }

    // Optional: Also update the main product list delete button (if you have one)
    function ConfirmDelete(button) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You are about to delete this product. This action cannot be undone!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                button.closest('form').submit();
            }
        });
        return false;
    }
</script>
@endpush {{-- <-- AND THIS IS WHERE YOUR SCRIPTS SHOULD END --}}
@endsection
