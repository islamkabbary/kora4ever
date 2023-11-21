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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team1')->constrained('teams')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('result_team1')->default(0);
            $table->foreignId('team2')->constrained('teams')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('result_team2')->default(0);
            $table->string('match_url')->nullable();
            $table->string('url_type')->nullable();
            $table->foreignId('leauge_id')->constrained('leauges')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('commentator_id')->nullable()->constrained('commentators')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('channel_id')->nullable()->constrained('channels')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('status' , ['fisrt half' , 'end fisrt half' , 'secound half' , 'extra time 1' , 'extra time 2' , 'start soon', 'end'])->nullable();
            $table->time('time');
            $table->date('date');
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
        Schema::dropIfExists('matches');
    }
};
