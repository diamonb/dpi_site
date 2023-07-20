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
        Schema::create('servicenows', function (Blueprint $table) {
            $table->id('id_service_now');
            $table->string('name');
            $table->string('experience_it');
            $table->Date('session');
            $table->integer('prefer_time');
            $table->string('customization');
            $table->string('email');
            $table->string('country');
            $table->bigInteger('number');
            $table->string('note');
            $table->string('town')->nullable('true');
            $table->string('statut')->nullabe('true');
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
        Schema::dropIfExists('servicenows');
    }
};
