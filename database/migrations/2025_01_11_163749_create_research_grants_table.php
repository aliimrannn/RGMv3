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
        Schema::create('research_grants', function (Blueprint $table) {
            $table->id('GrantID');
            $table->foreignId('project_leader_id')->constrained('academicians')->onDelete('cascade');
            $table->decimal('GrantAmount', 15, 2);
            $table->string('GrantProvider');
            $table->string('ProjectTitle');
            $table->date('StartDate');
            $table->integer('Duration'); // Duration in months
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('research_grants');
    }
};
