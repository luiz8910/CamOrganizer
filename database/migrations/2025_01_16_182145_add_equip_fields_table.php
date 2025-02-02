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
        Schema::create('multiple_fields_equips', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('equip_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('device_id');
            $table->string('mac')->nullable();
            $table->string('ip')->nullable();
            $table->string('mask')->nullable();
            $table->string('gateway')->nullable();
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
        Schema::dropIfExists('multiple_fields_equips');
    }
};
