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
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('price');
            $table->string('description', 500);
            $table->string('image');
<<<<<<< HEAD:database/migrations/2022_08_01_190343_create_products_table.php
            $table->integer('category_id');
=======
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('category_id')->on('category');
>>>>>>> 2f58b2851c556e39b7f119904f5b370085fb5203:database/migrations/2022_08_12_035154_create_product_table.php
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
        Schema::dropIfExists('product');
    }
};
