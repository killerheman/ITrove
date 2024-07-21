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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('technology');
            $table->string('thumbnail');
            $table->string('screenshot_img');
            $table->string('slug')->unique();
            $table->string('meta_keyword');
            $table->string('meta_title');
            $table->text('meta_description');
            $table->text('short_description');
            $table->text('full_description');
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
        Schema::dropIfExists('works');
    }
};
