<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Provinsi;
use App\Models\User;
use App\Models\Userprofile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId1 = User::where('username', 'yni@rssa.id')->first();
        $userId2 = User::where('username', 'fra@rssa.id')->first();
        $userId3 = User::where('username', 'eka@rssa.id')->first();
        $userId4 = User::where('username', 'fjr@rssa.id')->first();
        
        $provinsi1 = Provinsi::where('nama_provinsi', 'Jawa Timur')->first();
        $provinsi2 = Provinsi::where('nama_provinsi', 'Jawa Tengah')->first();
        $provinsi3 = Provinsi::where('nama_provinsi', 'Jawa Barat')->first();

        $kota1 = Kota::where('nama_kota', 'Malang')->first();
        $kota2 = Kota::where('nama_kota', 'Blitar')->first();
        $kota3 = Kota::where('nama_kota', 'Salatiga')->first();
        $kota4 = Kota::where('nama_kota', 'Semarang')->first();
        $kota5 = Kota::where('nama_kota', 'Tegal')->first();
        $kota6 = Kota::where('nama_kota', 'Bandung')->first();
        $kota7 = Kota::where('nama_kota', 'Bogor')->first();

        $kecamatan1 = Kecamatan::where('nama_kecamatan', 'Blimbing')->first();
        $kecamatan6 = Kecamatan::where('nama_kecamatan', 'Argomulyo')->first();
        $kecamatan9 = Kecamatan::where('nama_kecamatan', 'Candisari')->first();
        $kecamatan2 = Kecamatan::where('nama_kecamatan', 'Kedungkandang')->first();

        Userprofile::create([
            'name_userprofile' => 'Yannu Indra',
            'alamat_userprofile' => 'Jl. Raya 1',
            'status_userprofile' => 1,
            'fk_user_id' => $userId1->id,
            'fk_provinsi_id' => $provinsi1->id,
            'fk_kota_id' => $kota1->id,
            'fk_kecamatan_id' => $kecamatan1->id,
        ]);

        Userprofile::create([
            'name_userprofile' => 'Frans Agum G',
            'alamat_userprofile' => 'Jl. Raya 2',
            'status_userprofile' => 1,
            'fk_user_id' => $userId2->id,
            'fk_provinsi_id' => $provinsi2->id,
            'fk_kota_id' => $kota3->id,
            'fk_kecamatan_id' => $kecamatan6->id,
        ]);

        Userprofile::create([
            'name_userprofile' => 'Eko Arif',
            'alamat_userprofile' => 'Jl. Raya 3',
            'status_userprofile' => 0,
            'fk_user_id' => $userId3->id,
            'fk_provinsi_id' => $provinsi3->id,
            'fk_kota_id' => $kota4->id,
            'fk_kecamatan_id' => $kecamatan9->id,
        ]);

        Userprofile::create([
            'name_userprofile' => 'Fajar Suryansyah',
            'alamat_userprofile' => 'Jl. Raya 4',
            'status_userprofile' => 0,
            'fk_user_id' => $userId4->id,
            'fk_provinsi_id' => $provinsi1->id,
            'fk_kota_id' => $kota1->id,
            'fk_kecamatan_id' => $kecamatan2->id,
        ]);
    }
}
