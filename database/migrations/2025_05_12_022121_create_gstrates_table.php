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
        Schema::create('gstrates', function (Blueprint $table) {
            $table->id();
            $table->string('code_type')->nullable();
            $table->string('code')->nullable();
            $table->string('code_description')->nullable();
            $table->decimal('igst', 5, 2);
            $table->decimal('cgst', 5, 2)->nullable();
            $table->decimal('sgst', 5, 2)->nullable();

            // Status: Active / Not Active
            $table->tinyInteger('status')->default(1)->comment('1 => Active, 2 => Inactive');
            
            $table->string('remark')->nullable();
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
        Schema::dropIfExists('gstrates');
    }
};
