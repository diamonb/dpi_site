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
        Schema::create('consultants', function (Blueprint $table) {
            $table->id('id_sonsultant');
            $table->string('insdustry');
            $table->string('business_area');
            $table->integer('business_long');
            $table->string('insdustry_interest');
            $table->string('motivation');
            $table->integer('language');
            $table->string('hear');
            $table->string('first_name')->nullable('true');
            $table->string('last_name')->nullable('true');
            $table->string('email');
            $table->string('zip')->nullable('true');
            $table->string('address');
            $table->string('address_deux')->nullable('true');
            $table->string('city');
            $table->string('state');
            $table->integer('country');
            $table->string('resume_link');
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
        Schema::dropIfExists('consultants');
    }
};
