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
        Schema::table('admins', function (Blueprint $table) {
            $table->tinyInteger('role')->unsigned()->default(1)->after('id')->comment('権限(0:enduser, 1:admin)');
        });
        Schema::table('end_users', function (Blueprint $table) {
            $table->tinyInteger('role')->unsigned()->default(0)->after('id')->comment('権限(0:enduser, 1:admin)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn('role');
        });
        Schema::table('end_users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
};
