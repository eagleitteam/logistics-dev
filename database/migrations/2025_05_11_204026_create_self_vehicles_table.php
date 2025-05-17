<?php

use App\Models\Vehicle;
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
        Schema::create('self_vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Vehicle::class)->nullable()->constrained();
            $table->tinyInteger('fule_type')->default(0)->comment('1 => Diesel, 2 => CNG 3=> Electrical');
            $table->date('register_date')->nullable();
            $table->string('chassis_num')->nullable();
            $table->string('eng_num')->nullable();
            $table->string('model_num')->nullable();
            $table->string('toll_stm')->nullable();
            $table->string('remark')->nullable();
            $table->string('f_s_d')->nullable();
            $table->string('f_e_d')->nullable();
            $table->string('file')->nullable();
            $table->date('tax_start_date')->nullable();
            $table->date('tax_end_date')->nullable();
            $table->string('tax_file')->nullable();
            $table->date('insurance_start_date')->nullable();
            $table->date('insurance_end_date')->nullable();
            $table->string('insurance_company_name')->nullable();
            $table->string('insurance_document')->nullable();
            $table->date('puc_start_date')->nullable();
            $table->date('puc_end_date')->nullable();
            $table->string('puc_file')->nullable();
            $table->date('permit_start_date')->nullable();
            $table->date('permit_end_date')->nullable();
            $table->string('permit_document')->nullable();

            $table->date('national_permit_start_date')->nullable();
            $table->date('national_permit_end_date')->nullable();
            $table->string('national_permit_file')->nullable();

            $table->date('loan_start_date')->nullable();
            $table->date('loan_end_date')->nullable();

            $table->string('bank_name')->nullable();
            $table->string('loan_amt')->nullable();
            $table->string('emi_count')->nullable();
            $table->string('emi_amt')->nullable();
            $table->date('emi_date')->nullable();
            $table->string('loan_document')->nullable();

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
        Schema::dropIfExists('self_vehicles');
    }
};
