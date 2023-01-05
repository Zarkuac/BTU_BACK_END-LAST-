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
        Schema::create('yt', function (Blueprint $table) {
            $table->id();
            $table->url();
            $table->string('name');
            $table->string('description');
            $table->string('duration');
            $table->integer('likes');
            $table->integer('subscribers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yt');
    }
};
