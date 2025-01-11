<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResearchGrantController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MilestoneController;
use App\Http\Controllers\AcademicianController;

Route::get('/', function () {
    return view('welcome');
});

// Research Grant Routes
Route::resource('researchgrants', ResearchGrantController::class);

// Milestone Routes
Route::resource('milestones', MilestoneController::class);

// Member Routes
Route::resource('members', MemberController::class);

// Academician Routes
Route::resource('academicians', AcademicianController::class);