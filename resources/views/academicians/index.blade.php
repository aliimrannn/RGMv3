@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Academicians</h1>
    <a href="{{ route('academicians.create') }}" class="btn btn-primary mb-3">Add New Academician</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>College</th>
                <th>Department</th>
                <th>Position</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($academicians as $academician)
                <tr>
                    <td>{{ $academician->name }}</td>
                    <td>{{ $academician->email }}</td>
                    <td>{{ $academician->college }}</td>
                    <td>{{ $academician->department }}</td>
                    <td>{{ $academician->position }}</td>
                    <td>
                        <a href="{{ route('academicians.edit', $academician->StaffID) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('academicians.destroy', $academician->StaffID) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
