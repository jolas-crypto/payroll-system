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
        Schema::create('pag_ibig_premiums', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id')->index();
            $table->decimal('gross_pay_from', 15, 2)->default(0);
            $table->decimal('less_ee_share', 15, 2)->default(0);
            $table->decimal('less_er_share', 15, 2)->default(0);
            $table->decimal('more_ee_share', 15, 2)->default(0);
            $table->decimal('more_er_share', 15, 2)->default(0);
            $table->decimal('max_ee_share', 15, 2)->default(0);
            $table->decimal('max_er_share', 15, 2)->default(0);
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
        Schema::dropIfExists('pag_ibig_premiums');
    }
};
