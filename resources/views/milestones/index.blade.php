@extends('layouts.app')

@section('content')
    <h1>Milestones for Research Grant: {{ $researchGrant->ResearchGrantName }}</h1>

    <ul>
        @foreach ($milestones as $milestone)
            <li>
                <strong>{{ $milestone->MilestoneName }}</strong><br>
                Target Date: {{ $milestone->TargetCompletionDate }}<br>
                Status: {{ $milestone->Status }}<br>
                Remarks: {{ $milestone->Remarks }}<br>
                <a href="{{ route('milestone.edit', ['researchGrantId' => $researchGrant->ResearchGrantID, 'milestoneId' => $milestone->MilestoneID]) }}">Edit</a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('milestone.create', $researchGrant->ResearchGrantID) }}">Add New Milestone</a>
@endsection
