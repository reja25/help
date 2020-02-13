<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMrpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mrps', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('renter_id');
            $table->unsignedInteger('room_id');
            $table->string('month');
            $table->string('year');
            $table->string('renter_payment');
            $table->string('due_payment')->nullable();
            $table->date('jdate');

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
        Schema::dropIfExists('mrps');
    }
}
