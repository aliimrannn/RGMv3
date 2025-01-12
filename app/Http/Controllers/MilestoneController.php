<?php

namespace App\Http\Controllers;

use App\Models\Milestone;
use App\Models\ResearchGrant;
use Illuminate\Http\Request;

class MilestoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($researchGrantId)
    {
        $researchGrant = ResearchGrant::findOrFail($researchGrantId);
        $milestones = $researchGrant->milestones;
        return view('milestone.index', compact('milestones', 'researchGrant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($researchGrantId)
    {
        $researchGrant = ResearchGrant::findOrFail($researchGrantId);
        return view('milestone.create', compact('researchGrant'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'MilestoneName' => 'required|string|max:255',
            'TargetCompletionDate' => 'required|date',
            'Deliverable' => 'required|string|max:255',
        ]);

        Milestone::create([
            'research_grant_id' => $researchGrantId,
            'MilestoneName' => $request->MilestoneName,
            'TargetCompletionDate' => $request->TargetCompletionDate,
            'Deliverable' => $request->Deliverable,
        ]);

        return redirect()->route('milestone.index', $researchGrantId);  
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
        $researchGrant = ResearchGrant::findOrFail($researchGrantId);
        $milestone = Milestone::findOrFail($milestoneId);
        return view('milestone.edit', compact('milestone', 'researchGrant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Status' => 'required|string|max:255',
            'Remarks' => 'nullable|string',
        ]);

        $milestone = Milestone::findOrFail($milestoneId);
        $milestone->update([
            'Status' => $request->Status,
            'Remarks' => $request->Remarks,
            'DateUpdated' => now(),
        ]);

        return redirect()->route('milestone.index', $researchGrantId);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $milestone = Milestone::where('research_grant_id', $researchGrantId)
                              ->where('id', $milestoneId)
                              ->firstOrFail();
        $milestone->delete();

        return redirect()->route('milestones.index', ['researchGrantId' => $researchGrantId]);
    }
}
