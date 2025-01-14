<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResearchGrantController;
use App\Http\Controllers\MilestoneController;
use App\Http\Controllers\AcademicianController;

Route::get('/', function () {
    return view('welcome');
});

// Research Grant Routes
Route::resource('research-grants', ResearchGrantController::class);

// Milestone Routes
Route::prefix('researchgrant/{researchGrantId}')->group(function () {
    // Create milestone for a specific research grant
    Route::get('milestone/create', [MilestoneController::class, 'create'])->name('milestone.create');
    
    // Store milestone
    Route::post('milestone', [MilestoneController::class, 'store'])->name('milestone.store');
    
    // List milestones
    Route::get('milestone', [MilestoneController::class, 'index'])->name('milestone.index');
    
    // Edit and update milestone
    Route::get('milestone/{milestoneId}/edit', [MilestoneController::class, 'edit'])->name('milestone.edit');
    Route::put('milestone/{milestoneId}', [MilestoneController::class, 'update'])->name('milestone.update');
});

// Academician Routes
Route::resource('academicians', AcademicianController::class);