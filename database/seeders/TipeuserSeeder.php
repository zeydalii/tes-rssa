<?php

namespace Database\Seeders;

use App\Models\Tipeuser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipeuserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tipeuser::create([
            'nama_tipeuser' => 'Super Admin',
            'status_tipeuser' => '1',
        ]);

        Tipeuser::create([
            'nama_tipeuser' => 'Admin',
            'status_tipeuser' => '1',
        ]);

        Tipeuser::create([
            'nama_tipeuser' => 'Guest',
            'status_tipeuser' => '1',
        ]);
    }
}
