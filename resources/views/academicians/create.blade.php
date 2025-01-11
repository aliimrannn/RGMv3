@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Academician</h1>

    <form action="{{ route('academicians.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="college">College</label>
            <input type="text" name="college" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="department">Department</label>
            <input type="text" name="department" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" name="position" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
