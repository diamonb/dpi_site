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
        Schema::create('funds', function (Blueprint $table) {
            $table->id('id_fund');
            $table->string('full_name')->nullable('true');
            $table->string('business_name')->nullable('true');
            $table->bigInteger('phone_number')->nullable('true');
            $table->string('email')->nullable('true');
            $table->string('time_business')->nullable('true');
            $table->string('gross_monthly')->nullable('true');
            $table->string('fisco')->nullable('true');
            $table->string('loan_type')->nullable('true');
            $table->string('loan_amount')->nullable('true');
            $table->text('tell_us')->nullable('true');
            $table->text('hear')->nullable('true');
            $table->text('attachement_link')->nullable('true');
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
        Schema::dropIfExists('funds');
    }
};
