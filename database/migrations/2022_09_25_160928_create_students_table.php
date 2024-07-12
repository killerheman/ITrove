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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('fname')->nullable();
            $table->string('collegename')->nullable();
            $table->string('session')->nullable();
            $table->string('branch')->nullable();
            $table->string('mobileno')->nullable();
            $table->string('email')->nullable();
            $table->string('technology')->nullable();
            $table->string('pic')->nullable();
            $table->string('aadharno')->nullable();
            $table->string('aadharpic')->nullable();
            $table->string('highschool_rollno')->nullable();
            $table->string('highschool_marksheet')->nullable();
            $table->string('intermediate_rollno')->nullable();
            $table->string("intermediate_marksheet")->nullable();
            $table->string('diploma_rollno')->nullable();
            $table->string('diploma_marksheet')->nullable();
            $table->string('amount')->nullable();
            $table->boolean('payment_status')->default(false);
            $table->boolean('status')->default(true);
            $table->softDeletes();
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
        Schema::dropIfExists('students');
    }
};
