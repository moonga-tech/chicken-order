<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_chickens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("customer");
            $table->string("chicken");
            $table->string("type");
            $table->integer("number");
            $table->integer("cost");
            $table->string("location");
            $table->integer("orderlyNumber");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_chickens');
    }
};
