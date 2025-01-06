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
        Schema::create('admin_store', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('store_id');
        
            $table->index(['admin_id', 'store_id']);
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
            $table->timestamps();
        });
        
        Schema::create('end_user_store', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('end_user_id');
            $table->unsignedBigInteger('store_id');
        
            $table->index(['end_user_id', 'store_id']);
            $table->foreign('end_user_id')->references('id')->on('end_users')->onDelete('cascade');
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_store');
        Schema::dropIfExists('end_user_store');
    }
};
