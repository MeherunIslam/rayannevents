<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->integer('category_id');
            $table->string('booking_first_name');
            $table->string('booking_last_name');
            $table->string('booking_email');
            $table->string('booking_phone');
            $table->text('address');
            $table->string('state');
            $table->integer('post_code');
            $table->integer('event_date');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('guest');
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
        Schema::dropIfExists('bookings');
    }
}
