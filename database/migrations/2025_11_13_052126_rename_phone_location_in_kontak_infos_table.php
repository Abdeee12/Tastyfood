<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('kontak_infos', function (Blueprint $table) {
            $table->renameColumn('phone', 'telepon');
            $table->renameColumn('location', 'alamat');
        });
    }

    public function down(): void
    {
        Schema::table('kontak_infos', function (Blueprint $table) {
            $table->renameColumn('telepon', 'phone');
            $table->renameColumn('alamat', 'location');
        });
    }
};
