<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table){
            $table->increments('id');
            $table->string('name', 255)->nullable(false)->unique('name');
            $table->string('description', 255)->nullable(false)->unique('description');
            $table->string('price', 255)->nullable(false);
            $table->boolean('company');
            $table->string('path');
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
}
