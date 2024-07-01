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
        Schema::create('registration', function (Blueprint $table) {
            $table->id();
            $table->integer('lesson_id');
            $table->integer('student_id');
            $table->integer('price');
            $table->timestamps();
        });
    }


    public function timestamps($precision = 0)
    {
        $this->timestamps('created_at', $precision)->nullable();

        $this->timestamps('updated_at', $precision)->nullable();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration');
    }
};
