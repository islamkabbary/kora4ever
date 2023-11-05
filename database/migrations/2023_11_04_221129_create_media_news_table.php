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
        Schema::create('media_news', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['image','video'])->default('image');
            $table->string('url',2000);
            $table->foreignId('news_id')->nullable()->constrained('news');
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
        Schema::dropIfExists('media_news');
    }
};
