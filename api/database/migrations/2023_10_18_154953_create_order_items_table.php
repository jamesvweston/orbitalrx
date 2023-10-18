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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coffee_bean_id');
            $table->unsignedBigInteger('coffee_type_id');
            $table->unsignedBigInteger('order_id');
            $table->timestamps();

            $table->foreign('coffee_bean_id')
                ->references('id')
                ->on('coffee_beans');

            $table->foreign('coffee_type_id')
                ->references('id')
                ->on('coffee_types');

            $table->foreign('order_id')
                ->references('id')
                ->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
