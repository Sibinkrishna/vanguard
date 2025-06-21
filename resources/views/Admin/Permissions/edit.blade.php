@extends('Admin.Layouts.app')

@section('title', 'Manage Admin Permissions')

@section('content')
<div class="container mt-4">
    <h2>Assign Permissions to: {{ $admin->name }}</h2>

    <form action="{{ route('admin.permissions.update', $admin->id) }}" method="POST">
        @csrf

        <div class="mb-3">
            @foreach($permissions as $permission)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->name }}"
                        {{ $admin->hasPermissionTo($permission->name) ? 'checked' : '' }}>
                    <label class="form-check-label">{{ $permission->name }}</label>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-success">Update Permissions</button>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
