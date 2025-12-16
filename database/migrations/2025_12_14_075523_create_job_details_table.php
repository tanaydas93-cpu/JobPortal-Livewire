<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('job_details', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('job_type');
            $table->text('location');
            $table->longText('job_description');
            $table->text('details');
            $table->integer('salary');
            $table->text('forwhome');
            $table->boolean('position_filled')->default(false);
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_details');
    }
};