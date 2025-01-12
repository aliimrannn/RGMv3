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
        Schema::table('research_grants', function (Blueprint $table) {
            
            $table->increments('GrantID')->change();  // This will set GrantID as auto-increment
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('research_grants', function (Blueprint $table) {
            
            $table->integer('GrantID')->change();
        });
    }
};
