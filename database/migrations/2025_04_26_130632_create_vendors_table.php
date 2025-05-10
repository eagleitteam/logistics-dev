<?php

use App\Models\Vehicle;
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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();           // For VENDOR
            $table->string('vendor_address')->nullable();        // For VENDOR
            $table->string('gst_no')->nullable();
            $table->tinyInteger('tds_applicable')->default(1)->comment('1=> Yes, 2=> No');

            $table->decimal('tds_rate', 5, 2)->nullable();        // Allow percentage like 1.00, 2.50, etc.

            $table->string('contact_name')->nullable();           // For VENDOR
            $table->string('contact_no')->nullable();             // For VENDOR
            $table->string('alternate_contact_no')->nullable();           // For VENDOR
            $table->string('email')->nullable();                  // For VENDOR
            $table->string('address')->nullable();
            $table->string('city')->nullable();                  // For VENDOR
            $table->string('pincode')->nullable();                  // For VENDOR
            $table->string('state')->nullable();                  // For VENDOR


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
        Schema::dropIfExists('vendors');
    }
};
