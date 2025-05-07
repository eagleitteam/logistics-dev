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
        Schema::table('vehicles', function (Blueprint $table) {
            $table->string('vehicle_number')->after('type');
            $table->string('vehicle_type')->after('vehicle_number');
            $table->string('fule_type')->after('vehicle_type');
            $table->string('register_date')->after('fule_type');
            $table->string('chassis_num')->after('register_date');
            $table->string('eng_num')->after('chassis_num');
            $table->string('model_num')->after('eng_num');
            $table->string('toll_stm')->after('model_num');
            $table->string('remark')->after('toll_stm');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->string('vehicle_number')->after('type');
            $table->string('vehicle_type')->after('vehicle_number');
            $table->string('fule_type')->after('vehicle_type');
            $table->string('register_date')->after('fule_type');
            $table->string('chassis_num')->after('register_date');
            $table->string('eng_num')->after('chassis_num');
            $table->string('model_num')->after('eng_num');
            $table->string('toll_stm')->after('model_num');
            $table->string('remark')->after('toll_stm');
        });
    }
};
