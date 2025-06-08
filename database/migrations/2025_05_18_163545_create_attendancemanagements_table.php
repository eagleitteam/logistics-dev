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
         Schema::create('attendancemanagements', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Yearmaster::class)->nullable()->constrained(); 
            $table->unsignedTinyInteger('employee_type')->comment('1 = Employee, 2 = Driver');
            $table->unsignedTinyInteger('employee_id');
            $table->string('attendance_type');

            $table->unsignedTinyInteger('total_days');
            $table->unsignedTinyInteger('attendance_days');

            $table->unsignedTinyInteger('month');

            $table->string('EmployeeName')->nullable();

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
        Schema::dropIfExists('attendancemanagements');
    }
};
