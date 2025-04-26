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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('contact_number', 15)->nullable();
            $table->string('email')->nullable();
            $table->string('owner_name')->nullable();

            // Static dropdown for billing type
            $table->tinyInteger('billing_type')->default(1)->comment('1=> Immediate, 2=> After Billing');


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
        Schema::dropIfExists('clients');
    }
};
