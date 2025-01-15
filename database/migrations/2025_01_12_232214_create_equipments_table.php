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
            $table->string('brand');
            $table->string('model');
            $table->foreignId('customer_id')->constrained();
            $table->foreignId('equipment_type_id')->constrained();
            $table->string('status');
            $table->string('port');
            $table->string('email');
            $table->string('phone');
            $table->string('ddns');
            $table->string('access_ip');
            $table->string('hd_brand');
            $table->string('storage_capacity');
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
