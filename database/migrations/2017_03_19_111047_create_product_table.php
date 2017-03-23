<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
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
            $table->string('product_name');
            $table->decimal('price',10,2);
            $table->string('product_description');
            $table->integer('product_freeShipping');
            $table->decimal('product_shipping_charges',10,2);
            $table->string('product_text_on_image');
            $table->string('product_background_image');
            $table->string('product_background_image_path');
            $table->integer('category_id')->references('category_id')->on('category');
            $table->string('product_image');
            $table->string('product_image_path');
            $table->json('product_image_json');
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
}
