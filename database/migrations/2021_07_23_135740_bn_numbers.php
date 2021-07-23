<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class bnNumbers extends Migration
{
    public function up()
    {
        Schema::create('bn_numbers', function (Blueprint $table) {
            $table->id();
            $table->integer('num1');
            $table->integer('num2');
            $table->integer('num3');
            $table->integer('num4');
            $table->integer('num5');
            $table->integer('num6');
            $table->integer('num7');
            $table->integer('price')->nullable()->default(10);
            $table->string('seller')->nullable();
            $table->integer('prefix')->nullable();
            $table->string('operator')->nullable();
            $table->string('excel')->nullable();
            $table->bigInteger('contact')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bn_numbers');
    }
}
