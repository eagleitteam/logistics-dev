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
            $table->string('f_name');
            $table->string('l_name');
            $table->string('mobile_no', 15);
            // Employment Dates
            $table->date('joining_date')->nullable();
            $table->date('end_date')->nullable();
            $table->unsignedInteger('basic_salary')->nullable(); // FIXED typo
            $table->string('alternate_contact_no')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('pincode')->nullable();
            $table->string('state')->nullable();

            // Status: Active / Not Active
            $table->tinyInteger('status')->default(1)->comment('1 => Active, 2 => Inactive');

            // Document Uploads (store file paths)
            $table->string('aadhar_card_path')->nullable();
            $table->string('pan_card_path')->nullable();
            $table->string('driving_license_path')->nullable();
            $table->date('driving_license_validity')->nullable();
            $table->string('remark')->nullable();

            // Bank / GPay Details
            $table->string('bank_name')->nullable();
            $table->string('bank_branch')->nullable();
            $table->string('bank_account_no')->nullable();
            $table->string('bank_ifsc_code')->nullable();

            $table->string('reference_name')->nullable();
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
