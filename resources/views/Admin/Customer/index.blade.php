@extends('Admin.Layouts.app')

@section('title', 'Customers List')
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
                    <h5 class="card-title">Customer List</h5>
                     <a href="{{ route('admin.customers.create') }}" class="btn btn-primary">Add Customer</a>
                </div>

                <div class="card-body custom-card-action p-0">
                    <div class="table-responsive">
                       <div class="row m-3">
                            <form method="GET" action="{{ route('admin.customers.index') }}" class="mb-3 d-flex gap-2 align-items-center">
                            <div class="col-4 d-flex justify-content-start">
                             <input type="text" name="search" value="{{ request('search') }}" class="form-control w-100" placeholder="Search by Name, Mobile, IOT SIM, Technician...">
                            </div>
                             <div class="col-1 d-flex justify-content-start">
                             <button type="submit" class="btn btn-primary w-100">Search</button>
                             </div>
                             <div class="col-1 d-flex justify-content-start">
                             <a href="{{ route('admin.customers.index') }}" class="btn btn-secondary w-100">Reset</a>
                            </div>
                        </form>
                       </div>
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr class="border-b">
                                    <th scope="row">ID</th>
                                    <th>customer</th>
                                    <th>Type</th>
                                    <th>Software Name</th>
                                    <th>Phone</th>
                                    <th>Installed On</th>
                                    <th>Expiry On</th>
                                    <th>Installed By</th>
                                    <th>Updated On</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $customer)
                                <tr>
                                    <td>{{ ($customers->currentPage() - 1) * $customers->perPage() + $loop->iteration }}</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-image">
                                                <img src="./../assets/images/avatar/2.png" alt="" class="img-fluid" />
                                            </div>
                                            <a href="javascript:void(0);">
                                                <span class="d-block">{{ $customer->name }}</span>
                                                <span class="fs-12 d-block fw-normal text-muted">{{ $customer->email }}</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>{{ $customer->type }}</td>
                                    <td>{{ $customer->software_name }}</td>
                                    <td>{{ $customer->contact1 }}, {{ $customer->contact2 }}</td>
                                    <td>{{ $customer->start_date ? \carbon\Carbon::parse($customer->start_date)->format('d-M-Y'):'' }}</td>
                                    <td>{{ Carbon\Carbon::parse($customer->expiry_date)->format('d-M-Y') }}</td>
                                    <td>{{ $customer->technician_name }}</td>
                                        {{-- <td>
                                            <span class="badge bg-gray-200 text-dark">{{ $customer->role->name }}</span>
                                        </td> --}}
                                    <td>{{ $customer->created_at != $customer->updated_at
                                        ? $customer->updated_at->format('Y-m-d H:i A') . ' '
                                        : $customer->created_at->format('Y-m-d H:i A') . ' ' }}
                                        </td>
                                    <td class="text-end">
                                        <div class="hstack gap-2 justify-content-end">
                                            <a href="javascript:void(0);"
                                        class="avatar-text avatar-md openPopup"
                                        data-name="{{ $customer->name }}"
                                        data-email="{{ $customer->email }}"
                                        data-address="{{ $customer->address }}"
                                        data-type="{{ $customer->type }}"
                                        data-software="{{ $customer->software_name }}"
                                        data-contact1="{{ $customer->contact1 }}"
                                        data-contact2="{{ $customer->contact2 }}"
                                        data-comment="{{ $customer->comment }}"
                                        data-tech="{{ $customer->technician_name }}"
                                        data-start="{{ \Carbon\Carbon::parse($customer->start_date)->format('d-M-Y') }}"
                                        data-expiry="{{ \Carbon\Carbon::parse($customer->expiry_date)->format('d-M-Y') }}"
                                        data-created="{{ $customer->created_at != $customer->updated_at ? $customer->updated_at->format('d-m-Y h:i A') . ' ' : $customer->created_at->format('d-m-Y h:i A') . ' ' }}"
                                        >
                                        <i class="feather-eye"></i>
                                        </a>

                                            <a href="{{ route('admin.customers.edit', $customer->id) }}" class="avatar-text avatar-md">
                                                <i class="feather-edit"></i>
                                            </a>
                                            {{-- <a href="{{ route('customer.register.delete', $customer->id) }}" class="avatar-text avatar-md">
                                                <i class="feather-trash-2"></i>
                                            </a> --}}
                                            <form action="{{ route('admin.customers.destroy', $customer->id) }}" method="POST" style="display:inline;" class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="avatar-text avatar-md" onclick="ConfirmDelete(this)" title="Delete">
                                                <i class="feather-trash-2"></i>
                                            </button>
                                        </form>

                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="card-footer">
                    <!-- Pagination -->
                    @if ($customers->hasPages())
                        <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                            <!-- Previous Page Link -->
                            @if ($customers->onFirstPage())
                                <li class="disabled">
                                    <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $customers->previousPageUrl() }}"><i class="bi bi-arrow-left"></i></a>
                                </li>
                            @endif

                            <!-- Page Numbers -->
                            @foreach ($customers->links()->elements as $element)
                                @if (is_string($element))
                                    <li><a href="javascript:void(0);"><i class="bi bi-dot"></i></a></li>
                                @endif

                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        <li>
                                            <a href="{{ $url }}" class="{{ ($page == $customers->currentPage()) ? 'active' : '' }}">{{ $page }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            @endforeach

                            <!-- Next Page Link -->
                            @if ($customers->hasMorePages())
                                <li>
                                    <a href="{{ $customers->nextPageUrl() }}"><i class="bi bi-arrow-right"></i></a>
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
<!-- Custom Customer Popup -->
<div id="customPopup" class="custom-popup">
    <div class="custom-popup-content">
        <span class="custom-close-btn" id="popupClose">&times;</span>
        <h4>Customer Details</h4>
        <table class="table table-bordered">
                                        <thead>

                                        </thead>
                                        <tbody>
                                                <tr>
                                                <th>Name:</th>
                                                <td><span id="popupName"></span></td>
                                                </tr>
                                                <tr>
                                                <th>Email:</th>
                                                <td><span id="popupEmail"></span></td>
                                                </tr>
                                                <tr>
                                                <th>Address:</th>
                                                <td><span id="popupAddress"></span></td>
                                                </tr>
                                                 <tr>
                                                <th>Type:</th>
                                                <td><span id="popupType"></span></td>
                                                </tr>
                                                <tr>
                                                <th>Software:</th>
                                                <td><span id="popupSoftware"></span></td>
                                                </tr>
                                                <tr>
                                                <th>Contact 1:</th>
                                                <td><span id="popupContact1"></span></td>
                                                </tr>
                                                <tr>
                                                <th>Contact 2:</th>
                                                <td><span id="popupContact2"></span></td>
                                                </tr>
                                                <tr>
                                                <th>Purchase Details:</th>
                                                <td><span id="popupComment"></span></td>
                                                </tr>
                                                <tr>
                                                <th>Installed On:</th>
                                                <td><span id="popupStart"></span></td>
                                                </tr>
                                                <tr>
                                                <th>Expiry On:</th>
                                                <td><span id="popupExpiry"></span></td>
                                                </tr>
                                                <th>Installed By:</th>
                                                <td><span id="popupTech"></span></td>
                                                </tr>
                                                <tr>
                                                <th>Updated On:</th>
                                                <td><span id="popupCreated"></span></td>
                                                </tr>

                                        </tbody>
                                    </table>

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
    .custom-popup {
    display: none;
    position: fixed;
    z-index: 99999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.6);
    justify-content: center;
    align-items: center;
}

.custom-popup-content {
    background-color: #fff;
    margin: auto;
    padding: 20px 30px;
    border-radius: 10px;
    width: 90%;
    max-width: 600px;
    position: relative;
}

.custom-popup-content h4 {
    margin-bottom: 15px;
}

.custom-popup-content ul {
    list-style: none;
    padding-left: 0;
}

.custom-popup-content li {
    margin-bottom: 10px;
    font-size: 15px;
}

.custom-close-btn {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 24px;
    cursor: pointer;
    color: #999;
}

.custom-close-btn:hover {
    color: #333;
}

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
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const openButtons = document.querySelectorAll(".openPopup");
    const popup = document.getElementById("customPopup");
    const closeBtn = document.getElementById("popupClose");

    openButtons.forEach(button => {
        button.addEventListener("click", function () {
            document.getElementById("popupName").innerText = this.dataset.name;
            document.getElementById("popupEmail").innerText = this.dataset.email;
            document.getElementById("popupAddress").innerText = this.dataset.address;
            document.getElementById("popupType").innerText = this.dataset.type;
            document.getElementById("popupSoftware").innerText = this.dataset.software;
            document.getElementById("popupContact1").innerText = this.dataset.contact1;
            document.getElementById("popupContact2").innerText = this.dataset.contact2;
            document.getElementById("popupComment").innerText = this.dataset.comment;
            document.getElementById("popupExpiry").innerText = this.dataset.expiry;
            document.getElementById("popupStart").innerText = this.dataset.start;
            document.getElementById("popupTech").innerText = this.dataset.tech;
            document.getElementById("popupCreated").innerText = this.dataset.created;

            popup.style.display = "flex";
        });
    });

    closeBtn.addEventListener("click", () => {
        popup.style.display = "none";
    });

    window.addEventListener("click", (event) => {
        if (event.target === popup) {
            popup.style.display = "none";
        }
    });
});

</script>

@endsection
