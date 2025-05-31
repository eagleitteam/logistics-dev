<?php

use App\Models\Client;
use App\Models\Driver;
use App\Models\Vehicle;
use App\Models\Vendor;
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
        Schema::create('trip_movements', function (Blueprint $table) {
            $table->id();

            // Trip info
            $table->unsignedInteger('trip_count_no')->unique();
            $table->date('trip_date')->nullable();
            $table->foreignIdFor(Vendor::class)->nullable()->constrained();
            $table->string('origin')->nullable();
            $table->string('destination')->nullable();
            $table->string('vehicle_no')->nullable();
            $table->foreignIdFor(Vehicle::class)->nullable()->constrained()->comment('type from master');

            // Client & vendor relations
            $table->foreignIdFor(Client::class)->nullable()->constrained();      // From clients table (3)
            $table->foreignIdFor(Driver::class)->nullable()->constrained();      // From driver master (4)

            $table->string('per_day_allow')->nullable();

            // Financials
            $table->unsignedDecimal('rate', 10, 2)->nullable();
            $table->unsignedDecimal('advance', 10, 2)->nullable();
            $table->date('advance_date')->nullable();

            $table->unsignedDecimal('toll', 10, 2)->nullable();
            $table->unsignedDecimal('unloading_charges', 10, 2)->nullable();
            $table->unsignedDecimal('holding_charges', 10, 2)->nullable();

            $table->unsignedDecimal('balance_payment', 10, 2)->nullable(); // Auto calculated (L + O + P + @ - M)
            $table->unsignedDecimal('payment_received_amount', 10, 2)->nullable();
            $table->date('payment_date')->nullable();

            // POD, Courier, Billing
            $table->string('pod_no')->nullable();
            $table->tinyInteger('pod_status')->default(1)->comment('1 => Rec, 2 => Not Rec');

            $table->tinyInteger('bill_status')->default(1)->comment('1 => INV PENDING');

            $table->string('payment_terms')->nullable();                        // Auto from client.billing_type
            $table->string('invoice_no')->nullable();                           // From invoice sheet (6)
            $table->date('invoice_date')->nullable();                           // From invoice sheet (6)

            $table->string('courier_doc_no')->nullable();
            $table->date('courier_date')->nullable();

            $table->unsignedDecimal('vendor_rate', 10, 2)->nullable();
            $table->text('remark')->nullable();

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
        Schema::dropIfExists('trip_movements');
    }
};
