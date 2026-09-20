<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('matakuliahs', function (Blueprint $table) {
            // Membuat kolom dosen_id tanpa memaksa foreign key constraint dulu
            $table->unsignedBigInteger('dosen_id')->nullable()->after('id');
        });
    }

    public function down(): void
    {
        Schema::table('matakuliahs', function (Blueprint $table) {
            $table->dropColumn('dosen_id');
        });
    }
};