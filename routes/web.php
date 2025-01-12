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
Route::resource('milestones', MilestoneController::class);
Route::get('/milestones/{researchGrantId}', [MilestoneController::class, 'index'])->name('milestones.index');
Route::get('/milestones/{researchGrantId}/create', [MilestoneController::class, 'create'])->name('milestones.create');

// Academician Routes
Route::resource('academicians', AcademicianController::class);