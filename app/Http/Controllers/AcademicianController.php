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
            'Email' => 'required|email|unique:academicians',
            'College' => 'required|string',
            'Department' => 'required|string',
            'Position' => 'required|string',
        ]);

        Academician::create($request->all());
        return redirect()->route('academicians.index');
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
        $academician = Academician::findOrFail($id);
        return view('academicians.edit', compact('academician'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Email' => 'required|email',
            'College' => 'required|string',
            'Department' => 'required|string',
            'Position' => 'required|string',
        ]);

        $academician = Academician::findOrFail($id);
        $academician->update($request->all());
        return redirect()->route('academicians.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $academician = Academician::findOrFail($id);
        $academician->delete();
        return redirect()->route('academicians.index');
    }
}
