<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkateboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skateboards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('skateboard_name');
            $table->string('skateboard_model');
            $table->decimal('skateboard_length');
            $table->decimal('skateboard_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skateboards');
    }
}
