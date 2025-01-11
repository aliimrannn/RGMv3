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
        Schema::table('academicians', function (Blueprint $table) {
            // Rename the columns back to their original names
            $table->renameColumn('staff_id', 'StaffID'); // If column is already correct
            $table->renameColumn('name', 'name');
            $table->renameColumn('email', 'Email');
            $table->renameColumn('position', 'Position');
            $table->renameColumn('college', 'College');
            $table->renameColumn('department', 'Department');
            
            // Remove the `id` column
            $table->dropColumn('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('academicians', function (Blueprint $table) {
            // Revert the changes if you want to roll back
            $table->renameColumn('staff_id', 'StaffID');
            $table->renameColumn('name', 'name');
            $table->renameColumn('email', 'Email');
            $table->renameColumn('position', 'Position');
            $table->renameColumn('college', 'College');
            $table->renameColumn('department', 'Department');
            
            // Revert the removal of `id` column
            $table->increments('id');
        });
    }
};
