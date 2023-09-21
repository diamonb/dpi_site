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
            $table->string('industry');
            $table->string('business_area');
            $table->string('business_long');
            $table->string('first_name')->nullable('true');
            $table->string('last_name')->nullable('true');
            $table->BigInteger('number');
            $table->string('email');
            $table->integer('country');
            $table->string('website')->nullable('true');
            $table->string('city');
            $table->string('state');
            $table->string('address');
            $table->string('zip')->nullable('true');
            $table->string('business');
            $table->text('tell_us');
            $table->string('language');
            $table->string('hear');
            $table->string('attachement');
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
        Schema::dropIfExists('consultants');
    }
};
