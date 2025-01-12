@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Milestone</h1>

    <form action="{{ route('milestones.update', $milestone->MilestoneID) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="MilestoneName">Milestone Name</label>
            <input type="text" name="MilestoneName" class="form-control" value="{{ $milestone->MilestoneName }}" required>
        </div>

        <div class="form-group">
            <label for="TargetCompletionDate">Target Completion Date</label>
            <input type="date" name="TargetCompletionDate" class="form-control" value="{{ $milestone->TargetCompletionDate }}" required>
        </div>

        <div class="form-group">
            <label for="Deliverable">Deliverable</label>
            <input type="text" name="Deliverable" class="form-control" value="{{ $milestone->Deliverable }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
