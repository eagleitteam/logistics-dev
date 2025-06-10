<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Yearmaster;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trans_salaries', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Yearmaster::class)->nullable()->constrained();
            $table->unsignedTinyInteger('employee_type')->comment('1 = Employee, 2 = Driver');
            $table->unsignedTinyInteger('employee_id');
            $table->unsignedTinyInteger('month');
            $table->date('from_date')->nullable();
            $table->date('to_date')->nullable();

            $table->string('EmployeeName')->nullable();

            $table->decimal('basic_salary', 10, 2)->default(0);
            $table->decimal('trip_allowance', 10, 2)->default(0);
            $table->decimal('advance', 10, 2)->default(0);
            $table->decimal('other_amount', 10, 2)->default(0);

            $table->boolean('freeze_status')->default(0)->comment('1 = Freeze, 0 = Pending');

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
        Schema::dropIfExists('trans_salaries');
    }
};
