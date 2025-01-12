@extends('layouts.app')

@section('content')
    <h1>Create Milestone for Research Grant: {{ $researchGrant->ResearchGrantName }}</h1>

    <form action="{{ route('milestone.store', $researchGrant->ResearchGrantID) }}" method="POST">
        @csrf
        <label for="MilestoneName">Milestone Name</label>
        <input type="text" name="MilestoneName" required><br>

        <label for="TargetCompletionDate">Target Completion Date</label>
        <input type="date" name="TargetCompletionDate" required><br>

        <label for="Deliverable">Deliverable</label>
        <input type="text" name="Deliverable" required><br>

        <button type="submit">Create Milestone</button>
    </form>
@endsection
