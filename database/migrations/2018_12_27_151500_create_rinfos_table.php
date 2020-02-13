<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rname');
            $table->string('profession')->nullable();
            $table->string('nid');
            $table->string('hno')->nullable();
            $table->string('hrent');
            $table->string('advance');
            $table->string('jdate');
            $table->string('phone');
            $table->text('comments')->nullable();
            $table->string('image');
            $table->unsignedInteger('room_id');
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
        Schema::dropIfExists('rinfos');
    }
}
