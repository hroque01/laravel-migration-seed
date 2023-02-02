<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('phone', 20);
            $table->string('departure', 32);
            $table->string('destination', 32);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->text('description')->nullable(true);
            $table->boolean('refundable')->default(false);
            $table->integer('price')->unsigned()->nullable();
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
        Schema::dropIfExists('user');
    }
};