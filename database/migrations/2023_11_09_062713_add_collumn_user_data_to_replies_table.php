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
        Schema::table('replies', function (Blueprint $table) {
            $table->string('user_name')->nullable();
            $table->integer('to_user_id')->nullable();
            $table->string('to_user_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('replies', function (Blueprint $table) {
            $table->dropColumn('user_name');
            $table->dropColumn('to_user_id');
            $table->dropColumn('to_user_name');
        });
    }
};
