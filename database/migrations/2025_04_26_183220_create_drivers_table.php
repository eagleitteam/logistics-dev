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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();

            // Driver Details
            $table->string('name');
            $table->string('mobile_no', 15);
            $table->unsignedInteger('basic_salary')->nullable(); // FIXED typo

            // Employment Dates
            $table->date('joining_date')->nullable();
            $table->date('end_date')->nullable();

            // Status: Active / Not Active
            $table->tinyInteger('status')->default(1)->comment('1 => Active, 2 => Inactive');

            // Document Uploads (store file paths)
            $table->string('aadhar_card_path')->nullable();
            $table->string('driving_license_path')->nullable();
            $table->date('driving_license_validity')->nullable();

            // Payment Transfer Method: Bank / Gpay
            $table->tinyInteger('payment_transfer_to')->default(1)->comment('1 => Bank, 2 => Gpay');

            // Bank / GPay Details
            $table->string('bank_name')->nullable();
            $table->string('bank_account_no')->nullable();
            $table->string('bank_ifsc_code')->nullable();
            $table->string('bank_branch')->nullable();
            $table->string('gpay_number', 15)->nullable();


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
        Schema::dropIfExists('drivers');
    }
};
