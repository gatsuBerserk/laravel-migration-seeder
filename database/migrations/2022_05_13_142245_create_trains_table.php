<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("company", 30);
            $table->date("departure_date");
            $table->text("departure_station");
            $table->text("arrival_station");
            $table->time("departure_time");
            $table->time("arrival_time"); 
            $table->string("train_code", 10); 
            $table->tinyInteger("carriages");
            $table->boolean("is_onTime"); 
            $table->boolean("is_deleted");
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
        Schema::dropIfExists('trains');
    }
}
