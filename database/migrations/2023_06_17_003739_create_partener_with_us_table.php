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
            $table->string('business_address');
            $table->string('industry');
            $table->integer('year_etablished');
            $table->string('contact_person');
            $table->bigInteger('number');
            $table->string('email');
            $table->integer('website')->nullable('true');
            $table->integer('country');
            $table->string('city');
            $table->string('state');
            $table->string('zip')->nullable('true');
            $table->text('core_value');
            $table->text('interest');
            $table->text('goals');
            $table->string('type');
            $table->string('expectations');
            $table->string('strength');
            $table->string('language')->nullable('true');
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
        Schema::dropIfExists('partener_with_us');
    }
};
