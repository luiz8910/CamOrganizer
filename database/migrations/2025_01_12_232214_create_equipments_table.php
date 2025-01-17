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
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->integer('device_id');
            $table->integer('customer_id');
            $table->string('brand');
            $table->string('model');
            $table->string('serial');
            $table->string('status')->default('active');
            $table->string('port');
            $table->string('email');
            $table->string('phone');
            $table->string('ddns')->nullable();
            $table->string('access_ip');
            $table->string('hd_brand')->nullable();
            $table->string('storage_capacity')->nullable();
            $table->string('installation_location');
            $table->string('description');
            $table->softDeletes();
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
        Schema::dropIfExists('equipments');
    }
};
