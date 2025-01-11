<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Academician;
use App\Models\ResearchGrant;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $researchGrant = ResearchGrant::findOrFail($researchGrantId);
        $members = $researchGrant->members;
        $academicians = Academician::all();
        return view('members.index', compact('researchGrant', 'members', 'academicians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'academician_id' => 'required|exists:academicians,StaffID',
        ]);

        Member::create([
            'research_grant_id' => $researchGrantId,
            'academician_id' => $request->academician_id,
        ]);

        return redirect()->route('members.index', ['researchGrantId' => $researchGrantId]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $member = Member::where('research_grant_id', $researchGrantId)
                        ->where('id', $memberId)
                        ->firstOrFail();
        $member->delete();

        return redirect()->route('members.index', ['researchGrantId' => $researchGrantId]);
    }
}
