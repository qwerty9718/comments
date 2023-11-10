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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('some comment');
            $table->text('body');

            $table->unsignedBigInteger('topic_id');
            $table->index('topic_id','topic_comment_idx');
            $table->foreign('topic_id','topic_comment_fk')
                ->on('topics')
                ->references('id');

            $table->unsignedBigInteger('user_id');
            $table->index('user_id','user_comment_idx');
            $table->foreign('user_id','user_comment_fk')
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
        Schema::dropIfExists('comments');
    }
};
