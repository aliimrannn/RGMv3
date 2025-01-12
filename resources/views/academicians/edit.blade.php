@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Academician</h1>

    <form action="{{ route('academicians.update', $academician->StaffID) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="StaffID" class="form-label">Staff ID</label>
            <input type="text" class="form-control" id="StaffID" name="StaffID"  value="{{ $academician->StaffID }}" readonly>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name"  value="{{ old('name', $academician->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="Position" class="form-label">Position</label>
            <select class="form-select" id="Position" name="Position"  value="{{ old('Position', $academician->Position) }}" required>
                <option value="">Select Position</option>
                <option value="Professor">Professor</option>
                <option value="Assoc Prof">Assoc Prof</option>
                <option value="Senior Lecturer">Senior Lecturer</option>
                <option value="Lecturer">Lecturer</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" id="Email" name="Email" value="{{ old('Email', $academician->Email) }}"required>
        </div>

        <div class="mb-3">
            <label for="College" class="form-label">College</label>
            <input type="text" class="form-control" id="College" name="College" value="{{ old('College', $academician->College) }}" required>
        </div>

        <div class="mb-3">
            <label for="Department" class="form-label">Department</label>
            <input type="text" class="form-control" id="Department" name="Department" value="{{ old('Department', $academician->Department) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
