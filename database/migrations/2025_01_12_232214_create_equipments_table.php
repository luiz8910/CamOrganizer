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
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('serial')->nullable();
            $table->string('status')->default('active');
            $table->string('port')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('ddns')->nullable();
            $table->string('access_ip')->nullable();
            $table->string('hd_brand')->nullable();
            $table->string('storage_capacity')->nullable();
            $table->string('installation_location')->nullable();
            $table->string('description')->nullable();
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
