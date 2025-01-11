@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Research Grants</h1>
    <a href="{{ route('research-grants.create') }}" class="btn btn-primary mb-3">Add New Research Grant</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Project Title</th>
                <th>Grant Amount</th>
                <th>Grant Provider</th>
                <th>Start Date</th>
                <th>Duration</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($researchGrants as $grant)
                <tr>
                    <td>{{ $grant->ProjectTitle }}</td>
                    <td>{{ $grant->GrantAmount }}</td>
                    <td>{{ $grant->GrantProvider }}</td>
                    <td>{{ $grant->StartDate }}</td>
                    <td>{{ $grant->Duration }} months</td>
                    <td>
                        <a href="{{ route('research-grants.edit', $grant->GrantID) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('research-grants.destroy', $grant->GrantID) }}" method="POST" style="display:inline;">
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
