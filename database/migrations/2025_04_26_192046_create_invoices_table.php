<?php

use App\Models\Client;
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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();

             // Client reference
             $table->foreignIdFor(Client::class)->nullable()->constrained();

             // Invoice details
             $table->date('invoice_date')->nullable();
             $table->string('invoice_no')->nullable(); // Auto-generated on backend
             $table->unsignedBigInteger('invoice_amount')->default(0);
             $table->unsignedBigInteger('tds')->default(0);

             // Derived field: invoice_amount - tds
             $table->unsignedBigInteger('receivable_amount')->default(0);

             // Payment Received
             $table->unsignedBigInteger('payment_received_amount')->default(0);
             $table->date('payment_received_date')->nullable();

             // Bank / Cash dropdown
             $table->tinyInteger('payment_mode')->default(1)->comment('1 => Cash, 2 => BANK');

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
        Schema::dropIfExists('invoices');
    }
};
