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
            $table->foreignId('team_id')->nullable()->constrained('teams');
            $table->foreignId('leauge_id')->nullable()->constrained('leauges');
            $table->integer('played')->default(0);
            $table->integer('won')->default(0);
            $table->integer('drawn')->default(0);
            $table->integer('lost')->default(0);
            $table->integer('gf')->default(0);
            $table->integer('ga')->default(0);
            $table->integer('gd')->default(0);
            $table->integer('points')->default(0);
            $table->foreignId('next')->constrained('teams')->nullable();
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
