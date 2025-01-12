@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Research Grant</h1>

    <form action="{{ route('research-grants.update', $researchGrant->GrantID) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="project_leader_id">Project Leader</label>
            <select name="project_leader_id" class="form-control" required>
                <option value="">Select Project Leader</option>
                @foreach ($academicians as $academician)
                    <option value="{{ $academician->StaffID }}" {{ $academician->StaffID == $researchGrant->project_leader_id ? 'selected' : '' }}>
                        {{ $academician->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="GrantAmount">Grant Amount</label>
            <input type="number" name="GrantAmount" class="form-control" value="{{ $researchGrant->GrantAmount }}" required>
        </div>

        <div class="form-group">
            <label for="GrantProvider">Grant Provider</label>
            <input type="text" name="GrantProvider" class="form-control" value="{{ $researchGrant->GrantProvider }}" required>
        </div>

        <div class="form-group">
            <label for="ProjectTitle">Project Title</label>
            <input type="text" name="ProjectTitle" class="form-control" value="{{ $researchGrant->ProjectTitle }}" required>
        </div>

        <div class="form-group">
            <label for="StartDate">Start Date</label>
            <input type="date" name="StartDate" class="form-control" value="{{ $researchGrant->StartDate }}" required>
        </div>

        <div class="form-group">
            <label for="Duration">Duration (Months)</label>
            <input type="number" name="Duration" class="form-control" value="{{ $researchGrant->Duration }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
