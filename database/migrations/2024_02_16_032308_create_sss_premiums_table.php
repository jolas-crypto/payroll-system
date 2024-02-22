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
        Schema::create('sss_premiums', function (Blueprint $table) {
            $table->id();
            $table->year('year')->index();
            $table->decimal('salary_from', 15, 2)->nullable();
            $table->decimal('salary_to', 15, 2)->nullable();
            $table->decimal('regular_salary_credit', 15, 2)->nullable();
            $table->decimal('mpf_salary_credit', 15, 2)->nullable();
            $table->decimal('total_salary_credit', 15, 2)->nullable();
            $table->decimal('regular_employer_share', 15, 2)->nullable();
            $table->decimal('regular_employee_share', 15, 2)->nullable();
            $table->decimal('total_share', 15, 2)->nullable();
            $table->decimal('employer_compensation', 15, 2)->nullable();
            $table->decimal('employee_compensation', 15, 2)->nullable();
            $table->decimal('total_compensation', 15, 2)->nullable();
            $table->decimal('mpf_employer', 15, 2)->nullable()->comment('Mandatory Provident Fund for Employer');
            $table->decimal('mpf_employee', 15, 2)->nullable()->comment('Mandatory Provident Fund for Employee');
            $table->decimal('total_mpf', 15, 2)->nullable()->comment('Mandatory Provident Fund Total');
            $table->decimal('total_employer', 15, 2)->nullable();
            $table->decimal('total_employee', 15, 2)->nullable();
            $table->decimal('total_overall', 15, 2)->nullable();
            $table->unsignedBigInteger('created_by')->default(0);
            $table->unsignedBigInteger('updated_by')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sss_premiums');
    }
};
