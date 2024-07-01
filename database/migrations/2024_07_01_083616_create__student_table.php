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
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('phone')->unique();
            $table->integer('birthday');
            $table->boolean('gender');
            $table->string('last_name');
            $table->timestamps();
        });
    }

    public function timestamps($precision = 0)
    {
        $this->timestamps('created_at',$precision)->nullable();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_student');
    }
};
