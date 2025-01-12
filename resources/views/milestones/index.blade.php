@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Milestones for Grant ID: {{ $researchGrantId }}</h1>

    <a href="{{ route('milestones.create', $researchGrantId) }}" class="btn btn-success">Add Milestone</a>

    <table class="table">
        <thead>
            <tr>
                <th>Milestone Name</th>
                <th>Target Completion Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($milestones as $milestone)
                <tr>
                    <td>{{ $milestone->MilestoneName }}</td>
                    <td>{{ $milestone->TargetCompletionDate }}</td>
                    <td>{{ $milestone->Status }}</td>
                    <td>
                        <a href="{{ route('milestones.edit', [$researchGrantId, $milestone->id]) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('milestones.destroy', [$researchGrantId, $milestone->id]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No milestones available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
