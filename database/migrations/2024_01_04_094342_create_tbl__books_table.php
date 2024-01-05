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
    { {
            Schema::create('tbl__books', function (Blueprint $table) {
                $table->id();
                $table->string('book_uniq_id')->unique();
                $table->string('book_name');
                $table->foreignId('user_id');
                $table->foreignId('co_id');
                $table->foreignId('publisher_id');
                $table->string('cover_photo')->nullable();
                $table->timestamps();
                // $table->foreign('co_id')->references('id')->on('content_owners');
                // $table->foreign('publisher_id')->references('id')->on('publishers');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl__books');
    }
};
