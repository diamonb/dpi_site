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
        Schema::create('dobusinesses', function (Blueprint $table) {
            $table->id('id_dobusiness');
            $table->string('company');
            $table->string('industry');
            $table->string('business_adress');
            $table->integer('year_etablished');
            $table->string('contact_person');
            $table->BigInteger('number');
            $table->string('website')->nullable('true');
            $table->integer('country');
            $table->string('email');
            $table->string('city');
            $table->string('zip')->nullable('true');
            $table->text('core_value');
            $table->text('interest');
            $table->text('strength');
            $table->text('goals');
            $table->string('primary_field');
            $table->string('expectation');
            $table->string('hear')->nullable('true');
            $table->string('attachement')->nullable('true');
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
        Schema::dropIfExists('dobusinesses');
    }
};
