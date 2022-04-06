<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('serial')->unique();
            $table->string('name');
            $table->string('type');
            $table->string('category');
            $table->string('model');
            $table->integer('quantity')->default(1);
            $table->integer('b-price');
            $table->integer('s-price');
            $table->string('status');
            $table->string('availability');
            $table->string('cover_images');
            $table->longText('description');
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
        Schema::dropIfExists('products');
    }
}
