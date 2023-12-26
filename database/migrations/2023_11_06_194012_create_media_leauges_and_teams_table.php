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
        Schema::create('media_leauges_and_teams', function (Blueprint $table) {
            $table->id();
            $table->string('url',2000);
            $table->foreignId('championship_id')->nullable()->constrained('championships');
            $table->foreignId('team_id')->nullable()->constrained('teams');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_leauges_and_teams');
    }
};
