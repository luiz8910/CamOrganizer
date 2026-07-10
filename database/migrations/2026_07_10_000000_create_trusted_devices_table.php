<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('trusted_devices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            // SHA-256 do token secreto guardado no cookie do dispositivo.
            $table->string('token', 64)->index();
            // IP a partir do qual a verificação em duas etapas foi concluída.
            $table->string('ip_address', 45);
            $table->timestamp('expires_at');
            $table->timestamp('created_at')->nullable();

            $table->unique(['user_id', 'token']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('trusted_devices');
    }
};
