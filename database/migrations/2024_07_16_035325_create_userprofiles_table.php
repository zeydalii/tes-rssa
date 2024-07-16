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
        Schema::create('userprofiles', function (Blueprint $table) {
            $table->id();
            $table->string('name_userprofile');
            $table->string('alamat_userprofile');
            $table->boolean('status_userprofile');
            $table->foreignId('fk_user_id');
            $table->foreignId('fk_provinsi_id');
            $table->foreignId('fk_kota_id');
            $table->foreignId('fk_kecamatan_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userprofiles');
    }
};
