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
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description');
            $table->text('responsibilities');
            $table->text('technical_skills');
            $table->text('soft_skills');
            $table->integer('salary_min');
            $table->integer('salary_max');
            $table->text('programming_languages')->nullable();
            $table->text('tools')->nullable();
            $table->text('career_progression');
            $table->text('job_outlook');
            $table->text('pros');
            $table->text('cons');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
