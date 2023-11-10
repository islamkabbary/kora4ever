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
        Schema::create('team_has_leauges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->nullable()->constrained('teams')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('leauge_id')->nullable()->constrained('leauges')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('played');
            $table->integer('won');
            $table->integer('drawn');
            $table->integer('lost');
            $table->integer('gf');
            $table->integer('ga');
            $table->integer('gd');
            $table->integer('points');
            $table->foreignId('next')->constrained('teams')->onUpdate('cascade')->onDelete('cascade');
            $table->string('group')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_has_leauges');
    }
};
