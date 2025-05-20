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
        Schema::create('cashmemos', function (Blueprint $table) {
            $table->id();
            
            $table->string('memo_no')->nullable();
            $table->date('memo_date')->nullable();
            $table->string('client_name')->nullable();
            $table->string('vehicle_no')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->string('challan_no')->nullable();
            $table->string('origin')->nullable();
            $table->string('destination')->nullable();
            $table->decimal('rate', 10, 2)->nullable();
            $table->decimal('toll_charges', 10, 2)->nullable();
            $table->decimal('unloading_charges', 10, 2)->nullable();
            $table->decimal('handling_charges', 10, 2)->nullable();
            $table->decimal('other_expenses', 10, 2)->nullable();
            $table->decimal('balance_amount', 10, 2)->nullable();
            $table->string('payment_status')->nullable();
            $table->decimal('advance_amount', 10, 2)->nullable();
            $table->date('advance_date')->nullable();
            $table->text('note')->nullable();

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
        Schema::dropIfExists('cashmemos');
    }
};
