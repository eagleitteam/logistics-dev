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
        Schema::create('companyprofiles', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('address_line1')->nullable();
            $table->string('address_line2')->nullable();
            $table->string('companyphone')->nullable();
            $table->string('email')->nullable();
            $table->string('companywebsite')->nullable();
            $table->string('companylogo')->nullable();
            $table->string('gststatus')->nullable();
            $table->string('gstin')->nullable();
            $table->string('pan_number')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('pin_code')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('company_seal')->nullable();
            $table->string('company_signature')->nullable();
            $table->string('website')->nullable();
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
        Schema::dropIfExists('companyprofiles');
    }
};
