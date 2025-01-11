@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Academician</h1>

    <form action="{{ route('academicians.update', $academician->StaffID) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $academician->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $academician->email }}" required>
        </div>

        <div class="form-group">
            <label for="college">College</label>
            <input type="text" name="college" class="form-control" value="{{ $academician->college }}" required>
        </div>

        <div class="form-group">
            <label for="department">Department</label>
            <input type="text" name="department" class="form-control" value="{{ $academician->department }}" required>
        </div>

        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" name="position" class="form-control" value="{{ $academician->position }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
