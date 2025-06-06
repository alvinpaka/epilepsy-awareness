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
        Schema::table('stories', function (Blueprint $table) {
            $table->string('phone')->after('name')->nullable();
            $table->string('country_code', 10)->after('phone')->nullable();
            $table->string('subject')->after('country_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stories', function (Blueprint $table) {
            $table->dropColumn(['phone', 'country_code', 'subject']);
        });
    }
};
