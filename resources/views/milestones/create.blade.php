@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Milestone</h1>

    <form action="{{ route('milestone.store', $researchGrantId) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="MilestoneName">Milestone Name</label>
            <input type="text" name="MilestoneName" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="TargetCompletionDate">Target Completion Date</label>
            <input type="date" name="TargetCompletionDate" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Deliverable">Deliverable</label>
            <input type="text" name="Deliverable" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Add Milestone</button>
    </form>
</div>
@endsection
