@extends('layouts.app')

@section('content')
    <h1>Edit Milestone</h1>

    <form action="{{ route('milestone.update', ['researchGrantId' => $researchGrant->ResearchGrantID, 'milestoneId' => $milestone->MilestoneID]) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="Status">Status</label>
        <input type="text" name="Status" value="{{ $milestone->Status }}" required><br>

        <label for="Remarks">Remarks</label>
        <textarea name="Remarks">{{ $milestone->Remarks }}</textarea><br>

        <button type="submit">Update Milestone</button>
    </form>
@endsection
