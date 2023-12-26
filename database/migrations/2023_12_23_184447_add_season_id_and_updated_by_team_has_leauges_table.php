<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('team_has_leauges', function (Blueprint $table) {
            $table->foreignId('season_id')->nullable()->after('points')->constrained('seasons')->default(1);
            $table->foreignId('updated_by')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('team_has_leauges', function (Blueprint $table) {
            //
        });
    }
};
