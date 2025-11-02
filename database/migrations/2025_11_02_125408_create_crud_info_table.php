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
        Schema::create('crud_info', function (Blueprint $table) {
            $table->id();
            // user의 pk (id 칼럼)
            $table->unsignedBigInteger('user_id')->comment('사용자의 아이디');
            $table->string('subject',255)->comment('제목');
            $table->text('content',65535)->comment('내용');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crud_info');
    }
};
