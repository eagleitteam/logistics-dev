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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            
            $table->string('loan_type')->nullable();
            $table->foreignId('vendor_id')->nullable()->constrained('vendors');
            $table->date('tranDate')->nullable();
            $table->decimal('loanAMT', 10, 2)->nullable();
            $table->string('bank_name')->nullable();
            $table->date('due_date')->nullable();
            $table->text('remark')->nullable();
            $table->foreignId('voucher_ref')->nullable()->constrained('vouchermasters');
            
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
        Schema::dropIfExists('loans');
    }
};
