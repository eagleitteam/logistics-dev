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
        Schema::create('bankregisters', function (Blueprint $table) {
            $table->id();
            $table->string('act_type')->nullable();
            $table->string('Bank_Name')->nullable();
            $table->string('BankBranch')->nullable();
            $table->string('BankAccountNo')->nullable();
            $table->string('BankIFSCCode')->nullable();
            $table->string('Remark')->nullable();

            $table->tinyInteger('status')->default(1)->comment('1 => active, 2 => inactive');
            
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
        Schema::dropIfExists('bankregisters');
    }
};
