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
        Schema::create('payment_trackers', function (Blueprint $table) {
            $table->id();
            $table->date('pay_date')->nullable();
            $table->unsignedInteger('advance_amount')->nullable();

            $table->tinyInteger('mode_of_payment')->default(1)->comment('1 => Cash, 2 => Gpay, 3 => PhonePay, 4 => Bank');
            $table->tinyInteger('payment_against')->default(1)->comment('1 => Invoice, 2 => Track Sheet');

            $table->foreignIdFor(Client::class)->nullable()->constrained();
            $table->string('reference_no')->nullable();

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
        Schema::dropIfExists('payment_trackers');
    }
};
