<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBibliocvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bibliocvs', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('nom')->nullable();
             $table->string('prenoms')->nullable();
             $table->string('email')->nullable();
             $table->string('telephone')->nullable();
             $table->string('sexe')->nullable();
             $table->string('pos_conv')->nullable();
             $table->string('dom_comp')->nullable();
             $table->string('disponibilite')->nullable();
             $table->string('vitae')->nullable();
             $table->string('let_motiv')->nullable();
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
        Schema::dropIfExists('bibliocvs');
    }
}
