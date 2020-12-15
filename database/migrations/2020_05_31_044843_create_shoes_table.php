<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('item_description');
            $table->string('img');
            $table->string('quantity');
            $table->string('price', 10,2);
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('size_id');
            $table->timestamps();

            $table->foreign('brand_id')
            ->references('id')
            ->on('brands')
            ->onDelete('restrict')
            ->onUpdate('cascade');

            $table->foreign('color_id')
            ->references('id')
            ->on('colors')
            ->onDelete('restrict')
            ->onUpdate('cascade');

            $table->foreign('size_id')
            ->references('id')
            ->on('sizes')
            ->onDelete('restrict')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shoes');
    }
}
