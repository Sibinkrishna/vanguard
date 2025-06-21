@extends('Admin.Layouts.app')

@section('title', 'products List')
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
                    <h5 class="card-title">Product List</h5>
                     <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Add product</a>
                </div>

                <div class="card-body custom-card-action p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr class="border-b">
                                <th scope="row">ID</th>
                                <th>Featured Image</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                            <tr>
                                <td>{{ ($products->currentPage() - 1) * $products->perPage() + $loop->iteration }}</td>
                                <td>
                                    @if ($product->featured_image)
                                     <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-image">
                                        <img src="{{ Storage::url($product->featured_image) }}" alt="{{ $product->name }}" class="img-fluid">
                                            </div>

                                        </div>

                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>
                                    <span class="d-block">{{ $product->name }}</span>
                                </td>
                                <td>₹{{ number_format($product->price, 2) }}</td>
                                <td>
                                    <span class="badge bg-{{ $product->status ? 'success' : 'secondary' }} text-white">
                                        {{ $product->status ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td>{{ $product->created_at != $product->updated_at
                                    ? $product->updated_at->format('Y-m-d H:i A') . ' '
                                    : $product->created_at->format('Y-m-d H:i A') . ' ' }}
                                    </td>
                                <td class="text-end">
                                    <div class="hstack gap-2 justify-content-end">
                                        {{-- <a href="{{ route('admin.products.show', $product->id) }}" class="avatar-text avatar-md" title="View">
                                            <i class="feather-eye"></i>
                                        </a> --}}
                                        <a href="{{ route('admin.products.edit', $product->id) }}" class="avatar-text avatar-md" title="Edit">
                                            <i class="feather-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline;" class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="avatar-text avatar-md" onclick="ConfirmDelete(this)" title="Delete">
                                                <i class="feather-trash-2"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">No products found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
                <div class="card-footer">
                    <!-- Pagination -->
                    @if ($products->hasPages())
                        <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                            <!-- Previous Page Link -->
                            @if ($products->onFirstPage())
                                <li class="disabled">
                                    <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $products->previousPageUrl() }}"><i class="bi bi-arrow-left"></i></a>
                                </li>
                            @endif

                            <!-- Page Numbers -->
                            @foreach ($products->links()->elements as $element)
                                @if (is_string($element))
                                    <li><a href="javascript:void(0);"><i class="bi bi-dot"></i></a></li>
                                @endif

                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        <li>
                                            <a href="{{ $url }}" class="{{ ($page == $products->currentPage()) ? 'active' : '' }}">{{ $page }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            @endforeach

                            <!-- Next Page Link -->
                            @if ($products->hasMorePages())
                                <li>
                                    <a href="{{ $products->nextPageUrl() }}"><i class="bi bi-arrow-right"></i></a>
                                </li>
                            @else
                                <li class="disabled">
                                    <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                </li>
                            @endif
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div id="confirmModal" class="confirm-modal">
    <div class="confirm-modal-content">
        <h3>Are you sure?</h3>
        <p>You won't be able to revert this!</p>
        <div class="confirm-modal-buttons">
            <button id="cancelBtn" class="btn-cancel">Cancel</button>
            <button id="deleteBtn" class="btn-delete">Delete</button>
        </div>
    </div>
</div>
<!-- Add jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
// JavaScript to handle the custom confirmation modal
function ConfirmDelete(button) {
    // Show the modal
    document.getElementById("confirmModal").style.display = "flex";

    // Get the delete and cancel buttons
    const deleteBtn = document.getElementById("deleteBtn");
    const cancelBtn = document.getElementById("cancelBtn");

    // Get the closest form for deletion
    const form = button.closest("form");

    // Handle Delete button click
    deleteBtn.onclick = function() {
        form.submit(); // Submit the form to delete the package
        document.getElementById("confirmModal").style.display = "none"; // Hide the modal after submission
    };

    // Handle Cancel button click
    cancelBtn.onclick = function() {
        document.getElementById("confirmModal").style.display = "none"; // Close the modal if cancel is clicked
    };
}

// Optional: Close modal if clicking outside the modal content
window.onclick = function(event) {
    if (event.target === document.getElementById("confirmModal")) {
        document.getElementById("confirmModal").style.display = "none";
    }
};
</script>

<!-- CSS for the custom modal -->
<style>
/* Modal Background */
.confirm-modal {
    display: none; /* Hidden by default */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

/* Modal Content */
.confirm-modal-content {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    max-width: 400px;
    width: 100%;
}

/* Modal Buttons */
.confirm-modal-buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 20px;
}

.btn-cancel,
.btn-delete {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

.btn-cancel {
    background-color: #ccc;
    color: white;
}

.btn-delete {
    background-color: #d33;
    color: white;
}

.btn-cancel:hover,
.btn-delete:hover {
    opacity: 0.8;
}
</style>


@endsection
