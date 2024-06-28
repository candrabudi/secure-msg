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
        Schema::create('category_tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('central_id');
            $table->integer('parent_id');
            $table->integer('sub_parent_id');
            $table->integer('coordinator_id');
            $table->integer('sub_coordinator_id');
            $table->string('category_name');
            $table->tinyinteger('position');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_tasks');
    }
};
