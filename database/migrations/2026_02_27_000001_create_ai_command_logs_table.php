<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ai_command_logs', function (Blueprint $table) {
            $table->id();
            $table->string('plan_id', 36)->index();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->text('user_text')->nullable();
            $table->json('plan_json')->nullable();
            $table->json('result_json')->nullable();
            $table->string('phase', 20)->default('plan'); // plan | execute
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ai_command_logs');
    }
};
