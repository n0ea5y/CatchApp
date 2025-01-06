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
        Schema::rename('admin_store', 'admin_stores');
        Schema::rename('end_user_store', 'end_user_stores');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::rename('admin_stores', 'admin_store');
        Schema::rename('end_user_stores', 'end_user_store');
    }
};
