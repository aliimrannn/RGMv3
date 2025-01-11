@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Members</h1>
    <a href="{{ route('members.create') }}" class="btn btn-primary mb-3">Add New Member</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <td>{{ $member->academician->name }}</td>
                    <td>{{ $member->role }}</td>
                    <td>
                        <a href="{{ route('members.edit', $member->MemberID) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('members.destroy', $member->MemberID) }}" method="POST" style="display:inline;">
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
