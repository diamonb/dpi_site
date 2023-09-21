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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('compagnie');
            $table->string('insdustry');
            $table->string('full_name');
            $table->string('email');
            $table->string('address');
            $table->String('number');
            $table->string('city')->nullable('true');
            $table->integer('country')->nullable('true');
            $table->string('zip')->nullable('true');
            $table->string('website')->nullable('true');
            $table->text('project');
            $table->text('requirement');
            $table->string('business_unit');
            $table->string('language');
            $table->string('hear');
            $table->String('attach')->nullable('true');;
            $table->string('reference')->nullable('true');
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
        Schema::dropIfExists('clients');
    }
};
