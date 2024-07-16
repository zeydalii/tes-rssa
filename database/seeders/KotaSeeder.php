<?php

namespace Database\Seeders;

use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsi1 = Provinsi::where('nama_provinsi', 'Jawa Timur')->first();
        $provinsi2 = Provinsi::where('nama_provinsi', 'Jawa Tengah')->first();
        $provinsi3 = Provinsi::where('nama_provinsi', 'Jawa Barat')->first();

        Kota::create([
            'nama_kota' => 'Malang',
            'status_kota' => 1,
            'fk_provinsi_id' => $provinsi1->id,
        ]);

        Kota::create([
            'nama_kota' => 'Blitar',
            'status_kota' => 1,
            'fk_provinsi_id' => $provinsi1->id,
        ]);

        Kota::create([
            'nama_kota' => 'Salatiga',
            'status_kota' => 1,
            'fk_provinsi_id' => $provinsi2->id,
        ]);

        Kota::create([
            'nama_kota' => 'Semarang',
            'status_kota' => 1,
            'fk_provinsi_id' => $provinsi2->id,
        ]);

        Kota::create([
            'nama_kota' => 'Tegal',
            'status_kota' => 0,
            'fk_provinsi_id' => $provinsi2->id,
        ]);

        Kota::create([
            'nama_kota' => 'Bandung',
            'status_kota' => 0,
            'fk_provinsi_id' => $provinsi3->id,
        ]);

        Kota::create([
            'nama_kota' => 'Bogor',
            'status_kota' => 0,
            'fk_provinsi_id' => $provinsi3->id,
        ]);
    }
}
