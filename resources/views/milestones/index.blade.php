@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Milestones</h1>
    <a href="{{ route('milestones.create') }}" class="btn btn-primary mb-3">Add New Milestone</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Milestone Title</th>
                <th>Deadline</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($milestones as $milestone)
                <tr>
                    <td>{{ $milestone->MilestoneTitle }}</td>
                    <td>{{ $milestone->Deadline }}</td>
                    <td>
                        <a href="{{ route('milestones.edit', $milestone->MilestoneID) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('milestones.destroy', $milestone->MilestoneID) }}" method="POST" style="display:inline;">
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
