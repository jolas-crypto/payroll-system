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
        Schema::create('phil_health_premiums', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id')->index()->nullable();
            $table->integer('reported_id')->index()->nullable();
            $table->decimal('salary_from', 15, 2)->default(0);
            $table->decimal('salary_to', 15, 2)->default(0);
            $table->decimal('employee_share', 15, 2)->nullable()->default(0);
            $table->decimal('employer_share', 15, 2)->nullable()->default(0);
            $table->decimal('total_ee_er_share', 15, 2)->nullable()->default(0);
            $table->decimal('salary_credit', 15, 2)->nullable()->default(0);
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
        Schema::dropIfExists('phil_health_premiums');
    }
};
