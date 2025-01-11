@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Member</h1>

    <form action="{{ route('members.update', $member->MemberID) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="research_grant_id">Research Grant</label>
            <select name="research_grant_id" class="form-control" required>
                <option value="">Select Research Grant</option>
                @foreach ($researchGrants as $grant)
                    <option value="{{ $grant->GrantID }}" {{ $grant->GrantID == $member->research_grant_id ? 'selected' : '' }}>
                        {{ $grant->ProjectTitle }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="academician_id">Academician</label>
            <select name="academician_id" class="form-control" required>
                <option value="">Select Academician</option>
                @foreach ($academicians as $academician)
                    <option value="{{ $academician->StaffID }}" {{ $academician->StaffID == $member->academician_id ? 'selected' : '' }}>
                        {{ $academician->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="Role">Role</label>
            <input type="text" name="Role" class="form-control" value="{{ $member->Role }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
