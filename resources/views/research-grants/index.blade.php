@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Research Grants</h1>
    <a href="{{ route('research-grants.create') }}" class="btn btn-primary mb-3">Add Research Grant</a>

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Grant ID</th>
            <th>Project Leader</th>
            <th>Grant Amount</th>
            <th>Grant Provider</th>
            <th>Project Title</th>
            <th>Start Date</th>
            <th>Duration</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($researchGrants as $researchGrant)
        <tr>
            <td>{{ $researchGrant->GrantID }}</td>
            <td>{{ $researchGrant->projectLeader->name ?? 'N/A' }}</td> <!-- Displays leader's name -->
            <td>{{ $researchGrant->GrantAmount }}</td>
            <td>{{ $researchGrant->GrantProvider }}</td>
            <td>{{ $researchGrant->ProjectTitle }}</td>
            <td>{{ $researchGrant->StartDate }}</td>
            <td>{{ $researchGrant->Duration }} months</td> <!-- Duration with "months" -->
            <td>
                <!-- Edit button -->
                <a href="{{ route('research-grants.edit', $researchGrant->GrantID) }}" class="btn btn-warning">Edit</a>

                <!-- Delete button -->
                <form action="{{ route('research-grants.destroy', $researchGrant->GrantID) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

                <!-- View Milestones button -->
                <a href="{{ route('milestone.index', $researchGrant->GrantID) }}" class="btn btn-info">View Milestones</a>

                <!-- Add Milestone button -->
                <a href="{{ route('milestone.create', $researchGrant->GrantID) }}" class="btn btn-success">Add Milestone</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
