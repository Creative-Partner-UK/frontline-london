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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_designation_id')->nullable()->constrained();
            $table->string('name');
            $table->date('date_of_birth');
            $table->string('phone_number');
            $table->enum('job_title', ['head doorman', 'supervisor', 'team member'])->default('team member');
            $table->string('utr_number')->nullable();
            $table->string('national_insurance_number')->nullable();
            $table->text('remarks')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
        
    }
};
