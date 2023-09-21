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
        Schema::create('dielsurvey_participents', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->integer('age');
            $table->string('gender');
            $table->string('occupation');
            $table->string('participate');
            $table->string('survey');
            $table->string('specify')->nullable('true');
            $table->string('available');
            $table->string('specify_available')->nullable('true');
            $table->string('level');
            $table->string('comfortable');
            $table->string('considered');
            $table->string('hear');
            $table->string('specify_hear')->nullable('true');
            $table->text('additional_information');
            $table->string('email');
            $table->bigInteger('number');
            $table->string('city')->nullable('true');
            $table->integer('country')->nullable('true');
            $table->string('reference');
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
        Schema::dropIfExists('dielsurvey_participents');
    }
};
