<?php

namespace App\Http\Controllers;

use App\Models\ResearchGrant;
use App\Models\Academician;
use Illuminate\Http\Request;

class ResearchGrantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $researchGrants = ResearchGrant::with('projectLeader')->get();;
        return view('research-grants.index', compact('researchGrants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $academicians = Academician::all(); 
        return view('research-grants.create', compact('academicians'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ProjectTitle' => 'required',
            'GrantAmount' => 'required|numeric',
            'GrantProvider' => 'required',
            'StartDate' => 'required|date',
            'Duration' => 'required|integer',
            'project_leader_id' => 'required|exists:academicians,StaffID',
        ]);
    
        $researchGrant = new ResearchGrant();
        $researchGrant->ProjectTitle = $request->ProjectTitle;
        $researchGrant->GrantAmount = $request->GrantAmount;
        $researchGrant->GrantProvider = $request->GrantProvider;
        $researchGrant->StartDate = $request->StartDate;
        $researchGrant->Duration = $request->Duration;
        $researchGrant->project_leader_id = $request->project_leader_id;
        $researchGrant->save();
    
        return redirect()->route('research-grants.index')->with('success', 'Research grant created successfully');
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
        $researchGrant = ResearchGrant::findOrFail($id);
        $academicians = Academician::all();
        return view('research-grants.edit', compact('researchGrant', 'academicians'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'project_leader_id' => 'required|exists:academicians,StaffID',
            'GrantAmount' => 'required|numeric',
            'GrantProvider' => 'required|string',
            'ProjectTitle' => 'required|string',
            'StartDate' => 'required|date',
            'Duration' => 'required|integer',
        ]);

        $researchGrant = ResearchGrant::findOrFail($id);
        $researchGrant->update($request->all());
        return redirect()->route('research-grants.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $researchGrant = ResearchGrant::findOrFail($id);
        $researchGrant->delete();
        return redirect()->route('research-grants.index');
    }
}
