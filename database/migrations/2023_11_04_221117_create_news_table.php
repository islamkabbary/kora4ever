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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->longText('body');
            $table->enum('type', ['post','video'])->default('post');
            $table->foreignId('team_id')->constrained('teams');
            $table->foreignId('leauge_id')->constrained('leauges');
            $table->foreignId('news_id')->nullable()->constrained('news');
            $table->boolean('show_as_main_news')->default(false);
            $table->boolean('show_from_the_five_main_news')->default(false);
            $table->boolean('show_in_most_read')->default(false);
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
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
        Schema::dropIfExists('news');
    }
};
