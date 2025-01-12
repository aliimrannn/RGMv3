<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('milestones', function (Blueprint $table) {
            $table->id('MilestoneID');
            $table->foreignId('research_grant_id')->constrained()->onDelete('cascade');
            $table->string('MilestoneName');
            $table->date('TargetCompletionDate');
            $table->string('Status')->default('Pending');
            $table->text('Remarks')->nullable();
            $table->text('Deliverable')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('milestones');
    }
};
