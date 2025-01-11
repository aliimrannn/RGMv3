@extends('layouts.app')

@section('title', 'Add Academician')

@section('content')
<div class="container">
    <h1>Add Academician</h1>
    <form action="{{ route('academicians.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="StaffID" class="form-label">Staff ID</label>
            <input type="text" class="form-control" id="StaffID" name="StaffID" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="Position" class="form-label">Position</label>
            <select class="form-select" id="Position" name="Position" required>
                <option value="">Select Position</option>
                <option value="Professor">Professor</option>
                <option value="Assoc Prof">Assoc Prof</option>
                <option value="Senior Lecturer">Senior Lecturer</option>
                <option value="Lecturer">Lecturer</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" id="Email" name="Email" required>
        </div>

        <div class="mb-3">
            <label for="College" class="form-label">College</label>
            <input type="text" class="form-control" id="College" name="College" required>
        </div>

        <div class="mb-3">
            <label for="Department" class="form-label">Department</label>
            <input type="text" class="form-control" id="Department" name="Department" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
