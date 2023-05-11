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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('img_course');
            $table->string('price');
            $table->string('title');
            $table->text('description');
            $table->timestamps();
            // $table->string('instruct_img');
            // $table->string('instreuct_nam');
            // $table->string('instruct_subject');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
