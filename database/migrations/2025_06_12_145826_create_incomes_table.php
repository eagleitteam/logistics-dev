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
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->string('income_Category')->nullable()->comment('1 = AGN Trip, 2 = AGN Invoice, 3 = Advance');
            $table->string('client_id')->nullable();
            $table->string('tranDate')->nullable();
            $table->string('recincomeamt')->nullable();
            $table->string('trip_ids')->nullable();
            $table->string('trip_no')->nullable();
            $table->string('adj_pmt')->nullable();
            $table->string('remark')->nullable();
            $table->string('voucher_ref')->nullable();
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->foreignId('deleted_by')->nullable()->constrained('users');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incomes');
    }
};
