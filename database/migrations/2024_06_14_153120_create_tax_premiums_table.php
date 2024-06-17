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
        Schema::create('tax_premiums', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id')->index();
            $table->string('type', 15)->index();
            $table->decimal('income_1', 15, 2)->default('0.00')->nullable();
            $table->decimal('income_2', 15, 2)->default('0.00')->nullable();
            $table->decimal('income_3', 15, 2)->default('0.00')->nullable();
            $table->decimal('income_4', 15, 2)->default('0.00')->nullable();
            $table->decimal('income_5', 15, 2)->default('0.00')->nullable();
            $table->decimal('income_6', 15, 2)->default('0.00')->nullable();
            $table->decimal('income_7', 15, 2)->default('0.00')->nullable();
            $table->decimal('income_8', 15, 2)->default('0.00')->nullable();
            $table->decimal('exempt_1', 15, 2)->default('0.00')->nullable();
            $table->decimal('exempt_2', 15, 2)->default('0.00')->nullable();
            $table->decimal('exempt_3', 15, 2)->default('0.00')->nullable();
            $table->decimal('exempt_4', 15, 2)->default('0.00')->nullable();
            $table->decimal('exempt_5', 15, 2)->default('0.00')->nullable();
            $table->decimal('exempt_6', 15, 2)->default('0.00')->nullable();
            $table->decimal('exempt_7', 15, 2)->default('0.00')->nullable();
            $table->decimal('exempt_8', 15, 2)->default('0.00')->nullable();
            $table->decimal('percent_1', 15, 2)->default('0.00')->nullable();
            $table->decimal('percent_2', 15, 2)->default('0.00')->nullable();
            $table->decimal('percent_3', 15, 2)->default('0.00')->nullable();
            $table->decimal('percent_4', 15, 2)->default('0.00')->nullable();
            $table->decimal('percent_5', 15, 2)->default('0.00')->nullable();
            $table->decimal('percent_6', 15, 2)->default('0.00')->nullable();
            $table->decimal('percent_7', 15, 2)->default('0.00')->nullable();
            $table->decimal('percent_8', 15, 2)->default('0.00')->nullable();
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
        Schema::dropIfExists('tax_premiums');
    }
};
