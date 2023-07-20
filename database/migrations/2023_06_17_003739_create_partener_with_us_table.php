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
        Schema::create('partener_with_us', function (Blueprint $table) {
            $table->id('id_partnerwithus');
            $table->string('company');
            $table->string('industry');
            $table->string('business_area');
            $table->integer('business_long');
            $table->string('partner_with');
            $table->integer('type');
            $table->integer('website')->nullable('true');
            $table->string('language')->nullable('true');
            $table->string('hear')->nullable('true');
            $table->string('first_name')->nullable('true');
            $table->string('last_name')->nullable('true');
            $table->string('email');
            $table->integer('number');
            $table->string('zip')->nullable('true');
            $table->string('address');
            $table->string('address_deux')->nullable('true');
            $table->string('city');
            $table->string('state');
            $table->string('reference');
            $table->integer('country');
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
        Schema::dropIfExists('partener_with_us');
    }
};
