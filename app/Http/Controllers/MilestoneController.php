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
        $milestones = Milestone::where('research_grant_id', $researchGrantId)->get();

        return view('milestones.index', compact('milestones', 'researchGrantId'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($researchGrantId)
    {
        $researchGrant = ResearchGrant::where('GrantID', $researchGrantId)->firstOrFail();

        return view('milestones.create', compact('researchGrant'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'MilestoneName' => 'required|string',
            'TargetCompletionDate' => 'required|date',
            'Status' => 'required|string',
            'Remarks' => 'nullable|string',
            'Deliverable' => 'required|string',
        ]);

        Milestone::create([
            'research_grant_id' => $researchGrantId,
            'MilestoneName' => $request->MilestoneName,
            'TargetCompletionDate' => $request->TargetCompletionDate,
            'Status' => $request->Status,
            'Remarks' => $request->Remarks,
            'Deliverable' => $request->Deliverable,
        ]);

        return redirect()->route('milestones.index', ['researchGrantId' => $researchGrantId]);  
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
        $request->validate([
            'MilestoneName' => 'required|string',
            'TargetCompletionDate' => 'required|date',
            'Status' => 'required|string',
            'Remarks' => 'nullable|string',
            'Deliverable' => 'required|string',
        ]);

        $milestone = Milestone::where('research_grant_id', $researchGrantId)
                             ->where('id', $milestoneId)
                             ->firstOrFail();
        $milestone->update($request->all());

        return redirect()->route('milestones.index', ['researchGrantId' => $researchGrantId]);
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
