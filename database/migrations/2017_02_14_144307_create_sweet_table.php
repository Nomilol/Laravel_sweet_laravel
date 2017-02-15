<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSweetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sweet', function(Blueprint $table){
        $table->increments('id');
        $table->string('name');
        $table->integer('stock')->default(0);
        $table->nullableTimestamps();
      Schema::rename('sweet', 'sweets');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
