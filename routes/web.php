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
Route::resource('milestone', MilestoneController::class)->except(['show']);
});

// Academician Routes
Route::resource('academicians', AcademicianController::class);