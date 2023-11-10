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
        Schema::create('replies', function (Blueprint $table) {
            $table->id();

            $table->string('title')->default('some comment');
            $table->text('body');

            $table->unsignedBigInteger('comment_id');
            $table->index('comment_id','reply_comment_idx');
            $table->foreign('comment_id','reply_comment_fk')
                ->on('comments')
                ->references('id');

            $table->unsignedBigInteger('user_id');
            $table->index('user_id','user_reply_idx');
            $table->foreign('user_id','user_reply_fk')
                ->on('users')
                ->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('replies');
    }
};
