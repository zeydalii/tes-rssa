<?php

namespace Database\Seeders;

use App\Models\Provinsi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Provinsi::create([
            'nama_provinsi' => 'Jawa Timur',
            'status_provinsi' => 1,
        ]);

        Provinsi::create([
            'nama_provinsi' => 'Jawa Tengah',
            'status_provinsi' => 1,
        ]);

        Provinsi::create([
            'nama_provinsi' => 'Jawa Barat',
            'status_provinsi' => 1,
        ]);
    }
}
