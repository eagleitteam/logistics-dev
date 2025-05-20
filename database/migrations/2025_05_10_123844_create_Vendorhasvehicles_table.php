<?php

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
        Schema::create('Vendorhasvehicles', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Vendor::class)->nullable()->constrained();
            $table->string('vehicle_number')->nullable();
            $table->foreignIdFor(Vehicle::class)->nullable()->constrained();
            $table->string('capacity')->nullable();
            $table->string('status')->nullable();
        
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
        Schema::dropIfExists('Vendorhasvehicles');
    }
};
