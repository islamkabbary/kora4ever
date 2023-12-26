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
        Schema::create('championships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('tournament_type', ['international', 'continental', 'local', 'friendly_tournament', 'other'])->default('local');
            $table->enum('type', ['league', 'cup', 'supercup'])->nullable();
            $table->foreignId('season_id')->nullable()->constrained('seasons');
            $table->text('logo')->nullable();
            $table->foreignId('country_id')->nullable()->constrained('countries');
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
        Schema::dropIfExists('championships');
    }
};
