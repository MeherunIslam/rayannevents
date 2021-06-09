<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDescriptionInProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->string('product_name');
            $table->string('product_slug');
            $table->string('product_code');
            $table->string('product_quantity');
            $table->text('short_description');
            $table->string('long_description');
            $table->integer('price');
            $table->string('image_one');
            $table->string('image_two');
            $table->string('image_three');
            $table->integer('status')->default();
            
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
