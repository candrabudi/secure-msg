<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_data', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->default(0);
            $table->integer('central_id')->default(0);
            $table->integer('parent_id')->default(0);
            $table->integer('sub_parent_id')->default(0);
            $table->integer('coordinator_id')->default(0);
            $table->integer('sub_coordinator_id')->default(0);
            $table->integer('structure_task_id')->default(0);
            $table->string('latitude')->nullable();
            $table->integer('longtitude')->nullable();
            $table->text('description')->nullable();
            $table->tinyinteger('status');
            $table->string('position');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_data');
    }
};
