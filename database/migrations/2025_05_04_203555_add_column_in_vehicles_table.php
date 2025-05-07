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
            $table->string('f_s_d')->after('remark');
            $table->string('f_e_d')->after('f_s_d');
            $table->string('file')->after('f_e_d');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->string('f_s_d')->after('remark');
            $table->string('f_e_d')->after('f_s_d');
            $table->string('file')->after('f_e_d');
        });
    }
};
