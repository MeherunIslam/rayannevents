<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParlorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parlors', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('appoint_first_name');
            $table->string('quantity');
            $table->string('appoint_email');
            $table->string('appoint_phone');
            $table->string('appoint_date');
            $table->string('appoint_time');
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
        Schema::dropIfExists('parlors');
    }
}
