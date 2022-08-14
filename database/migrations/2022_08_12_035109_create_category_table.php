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
<<<<<<< HEAD:database/migrations/2022_08_01_190446_create_categories_table.php
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description', 500);
=======
        Schema::create('category', function (Blueprint $table) {
            $table->increments('category_id');
            $table->string('category_name');
>>>>>>> 2f58b2851c556e39b7f119904f5b370085fb5203:database/migrations/2022_08_12_035109_create_category_table.php
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
        Schema::dropIfExists('category');
    }
};
