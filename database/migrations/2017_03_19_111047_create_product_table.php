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
            $table->string('product_text_image')->nullable();
            $table->string('product_text_image_path')->nullable();

            $table->string('product_background_image')->nullable();
            $table->string('product_background_image_path')->nullable();
            $table->integer('category_id')->references('category_id')->on('category')->onDeleteCascade();
            $table->string('product_image')->nullable();
            $table->string('product_image_path')->nullable();
            $table->string('final_product_image')->nullable();
            $table->string('final_product_image_path')->nullable();
            $table->json('product_image_json')->nullable();
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
