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
        Schema::create('employeemanagements', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('emp_id')->unique();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->date('joining_date')->nullable();
            $table->decimal('basic_salary', 10, 2)->nullable();
            $table->string('contact_number')->nullable();
            $table->string('email')->nullable();
            $table->string('department')->nullable();
            $table->string('designation')->nullable();
            $table->text('address')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('ifsc_code')->nullable();
            $table->string('pan_number')->nullable();
            $table->string('branch')->nullable();
            $table->text('note')->nullable();

            $table->tinyInteger('status')->default(1)->comment('1 => active, 2 => inactive , 3 => on_leave');
            
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
        Schema::dropIfExists('employeemanagements');
    }
};
