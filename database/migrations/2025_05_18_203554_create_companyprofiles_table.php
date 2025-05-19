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
            $table->string('companyname')->nullable();
            $table->string('companyaddress')->nullable();
            $table->string('companyphone')->nullable();
            $table->string('companyemail')->nullable();
            $table->string('companywebsite')->nullable();
            $table->string('companylogo')->nullable();
            $table->string('gststatus')->nullable();
            $table->string('gstnumber')->nullable();
            $table->string('pannumber')->nullable();
            $table->string('regadd')->nullable();
            $table->string('pincode')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
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
