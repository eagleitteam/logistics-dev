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
        Schema::create('fuels', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('vehical_number')->nullable();
            $table->string('current_km')->nullable();
            $table->decimal('fuel_qty', 10, 2);
            $table->decimal('fuel_rate', 5, 2)->nullable();
            $table->string('driver_name')->nullable();
            $table->string('payment_method')->nullable();
            $table->decimal('distance', 7, 2);
            $table->decimal('fuel_amt', 7, 2);
            $table->decimal('avg', 5, 2);
           $table->string('note')->nullable();
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
        Schema::dropIfExists('fuels');
    }
};
