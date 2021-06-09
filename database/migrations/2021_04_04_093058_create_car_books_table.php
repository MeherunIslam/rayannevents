<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_books', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('car_id');
            $table->string('client_first_name');
            $table->string('client_last_name');
            $table->string('client_email');
            $table->text('client_address');
            $table->string('client_phone');
            $table->string('client_date');
            $table->string('client_time');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('car_books');
    }
}
