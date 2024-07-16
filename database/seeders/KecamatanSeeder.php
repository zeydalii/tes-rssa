<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use App\Models\Kota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kota1 = Kota::where('nama_kota', 'Malang')->first();
        $kota2 = Kota::where('nama_kota', 'Blitar')->first();
        $kota3 = Kota::where('nama_kota', 'Salatiga')->first();
        $kota4 = Kota::where('nama_kota', 'Semarang')->first();
        $kota5 = Kota::where('nama_kota', 'Tegal')->first();
        $kota6 = Kota::where('nama_kota', 'Bandung')->first();
        $kota7 = Kota::where('nama_kota', 'Bogor')->first();

        Kecamatan::create([
            'nama_kecamatan' => 'Blimbing',
            'status_kecamatan' => 1,
            'fk_kota_id' => $kota1->id,
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Kedungkandang',
            'status_kecamatan' => 1,
            'fk_kota_id' => $kota1->id,
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Klojen',
            'status_kecamatan' => 0,
            'fk_kota_id' => $kota1->id,
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Kepanjen Kidul',
            'status_kecamatan' => 1,
            'fk_kota_id' => $kota2->id,
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Sukorejo',
            'status_kecamatan' => 0,
            'fk_kota_id' => $kota2->id,
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Argomulyo',
            'status_kecamatan' => 1,
            'fk_kota_id' => $kota3->id,
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Sidorejo',
            'status_kecamatan' => 0,
            'fk_kota_id' => $kota3->id,
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Banyumanik',
            'status_kecamatan' => 0,
            'fk_kota_id' => $kota4->id,
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Candisari',
            'status_kecamatan' => 1,
            'fk_kota_id' => $kota4->id,
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Margadana',
            'status_kecamatan' => 0,
            'fk_kota_id' => $kota5->id,
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Tegal Barat',
            'status_kecamatan' => 0,
            'fk_kota_id' => $kota5->id,
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Andir',
            'status_kecamatan' => 0,
            'fk_kota_id' => $kota6->id,
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Astana Anyar',
            'status_kecamatan' => 0,
            'fk_kota_id' => $kota6->id,
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Bogor Timur',
            'status_kecamatan' => 0,
            'fk_kota_id' => $kota7->id,
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Tanah Sareal',
            'status_kecamatan' => 0,
            'fk_kota_id' => $kota7->id,
        ]);
    }
}
