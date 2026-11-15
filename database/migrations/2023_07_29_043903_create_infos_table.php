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
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->text('bio')->nullable();
            $table->text('school_name');
            $table->text('college_name');
            $table->text('university_name')->nullable();
            $table->text('master_phd')->nullable();
            $table->text('interested_field')->nullable();
            $table->text('blood_group');
            $table->text('work_field')->nullable();
            $table->text('position')->nullable();
            $table->text('joining_time')->nullable();
            $table->text('course')->nullable();
            $table->text('project')->nullable();
            $table->text('thesis')->nullable();
            $table->date('bod');
            $table->text('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infos');
    }
};
