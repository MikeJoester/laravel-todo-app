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
        Schema::create('todos', function (Blueprint $table) {
            $table->id('task_id');
            $table->string('task_name');
            $table->enum('status', ['open', 'done']);
            $table->enum('priority', ['high', 'medium', 'low']);
            $table->unsignedBigInteger('category_id'); //foreign key
            $table->timestamps();

            //define relationship
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
