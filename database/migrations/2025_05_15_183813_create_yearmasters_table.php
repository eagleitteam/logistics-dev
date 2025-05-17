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
        Schema::create('yearmasters', function (Blueprint $table) {
            $table->id();
            $table->string('tital')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            // Status: Active / Not Active
            $table->tinyInteger('status')->default(1)->comment('1 => Active, 2 => Inactive');

            // Freeze Status: 0 => Not Freeze, 1 => Freeze
            $table->tinyInteger('freeze_status')->default(0)->comment('0 => Not Freeze, 1 => Freeze');
            
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
        Schema::dropIfExists('yearmasters');
    }
};
