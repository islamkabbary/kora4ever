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
        Schema::create('leauges', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['league', 'cup', 'supercup', 'other'])->default('league');
            $table->text('logo')->nullable();
            $table->foreignId('country_id')->nullable()->constrained('countries');
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
        Schema::dropIfExists('leauges');
    }
};
