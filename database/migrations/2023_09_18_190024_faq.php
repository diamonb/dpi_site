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
        Schema::create('faqs', function (Blueprint $table) {
        $table->id('id_faq');
        $table->unsignedBigInteger('id_categorie_faq');
        $table->foreign('id_categorie_faq')->references('id_categoriefaq')->on('categorie_faqs');
        $table->text('question');
        $table->text('response');
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
        //
    }
};
