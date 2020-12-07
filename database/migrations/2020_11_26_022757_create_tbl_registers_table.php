<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_registers', function (Blueprint $table) {
            $table->id();
            $table->string('gioitinh',5);
            $table->string('name',50);
            $table->string('ho',100);
            $table->integer('day');
            $table->integer('month');
            $table->integer('year');
            $table->string('email',100);
            $table->string('password',100);
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
        Schema::dropIfExists('tbl_registers');
    }
}
