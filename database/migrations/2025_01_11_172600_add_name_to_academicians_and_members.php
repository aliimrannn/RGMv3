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
            $table->string('name')->after('StaffID'); // Adjust 'after' position as needed
        });

        Schema::table('members', function (Blueprint $table) {
            $table->string('name')->after('MemberID'); // Adjust 'after' position as needed
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('academicians', function (Blueprint $table) {
            $table->dropColumn('name');
        });

        Schema::table('members', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }
};
