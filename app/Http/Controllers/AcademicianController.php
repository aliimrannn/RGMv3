<?php

namespace App\Http\Controllers;

use App\Models\Academician;
use Illuminate\Http\Request;

class AcademicianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $academicians = Academician::all();
        return view('academicians.index', compact('academicians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('academicians.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'StaffID' => 'required|unique:academicians,StaffID',
            'name' => 'required',
            'Position' => 'required',
            'Email' => 'required|email',
            'College' => 'required',
            'Department' => 'required',
        ]);
    
        Academician::create([
            'StaffID' => $request->input('StaffID'),
            'name' => $request->input('name'),
            'Position' => $request->input('Position'),
            'Email' => $request->input('Email'),
            'College' => $request->input('College'),
            'Department' => $request->input('Department'),
        ]);
    
        return redirect()->route('academicians.index')->with('success', 'Academician added successfully!');
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
    public function edit($StaffID)
    {
        $academician = Academician::findOrFail($StaffID);
        return view('academicians.edit', compact('academician'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$StaffID)
    {
        $request->validate([
            'name' => 'required',
            'Email' => 'required|email',
            'College' => 'required',
            'Department' => 'required',
            'Position' => 'required',
        ]);

        $academician = Academician::findOrFail($StaffID);
        $academician->update($request->all());

        return redirect()->route('academicians.index')->with('success', 'Academician updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($StaffID)
    {
        $academician = Academician::findOrFail($StaffID);
        $academician->delete();
        return redirect()->route('academicians.index');
    }
}
