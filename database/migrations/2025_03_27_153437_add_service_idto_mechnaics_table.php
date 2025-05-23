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
        Schema::table('mechanics', function (Blueprint $table) {
            $table->bigInteger("service_id")->unsigned()->nullable()->constrained("services")->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // csak a tábla neve mechanics
        Schema::table('mechanics', function (Blueprint $table) {
            $table->bigInteger("service_id")->unsigned()->constrained("services")->change();
        });
    }
};
