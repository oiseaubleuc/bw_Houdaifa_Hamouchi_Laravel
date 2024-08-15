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
        Schema::table('jobs', function (Blueprint $table) {
            // Check if the 'type' column does not already exist before adding it
            if (!Schema::hasColumn('jobs', 'type')) {
                $table->string('type')->nullable()->after('beschrijving');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jobs', function (Blueprint $table) {
            // Drop the 'type' column only if it exists
            if (Schema::hasColumn('jobs', 'type')) {
                $table->dropColumn('type');
            }
        });
    }
};
