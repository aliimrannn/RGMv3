@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Research Grant</h2>
    <form action="{{ route('research-grants.store') }}" method="POST">
        @csrf

        <!-- Project Title -->
        <div class="form-group">
            <label for="project_title">Project Title</label>
            <input type="text" class="form-control @error('project_title') is-invalid @enderror" id="project_title" name="ProjectTitle" value="{{ old('ProjectTitle') }}" required>
            @error('ProjectTitle')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Grant Amount -->
        <div class="form-group">
            <label for="grant_amount">Grant Amount</label>
            <input type="text" class="form-control @error('grant_amount') is-invalid @enderror" id="grant_amount" name="GrantAmount" value="{{ old('GrantAmount') }}" required>
            @error('GrantAmount')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Grant Provider -->
        <div class="form-group">
            <label for="grant_provider">Grant Provider</label>
            <input type="text" class="form-control @error('grant_provider') is-invalid @enderror" id="grant_provider" name="GrantProvider" value="{{ old('GrantProvider') }}" required>
            @error('GrantProvider')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Start Date -->
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="StartDate" value="{{ old('StartDate') }}" required>
            @error('StartDate')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Duration -->
        <div class="form-group">
            <label for="duration">Duration (in months)</label>
            <input type="number" class="form-control @error('duration') is-invalid @enderror" id="duration" name="Duration" value="{{ old('Duration') }}" required>
            @error('Duration')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Project Leader -->
        <div class="form-group">
            <label for="project_leader">Project Leader</label>
            <select class="form-control @error('project_leader') is-invalid @enderror" id="project_leader" name="project_leader_id" required>
                <option value="">Select Project Leader</option>
                @foreach($academicians as $academician)
                    <option value="{{ $academician->StaffID }}" {{ old('project_leader_id') == $academician->StaffID ? 'selected' : '' }}>
                        {{ $academician->name }}
                    </option>
                @endforeach
            </select>
            @error('project_leader_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('research-grants.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
