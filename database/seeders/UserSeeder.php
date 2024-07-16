<?php

namespace Database\Seeders;

use App\Models\Tipeuser;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminType = Tipeuser::where('nama_tipeuser', 'Super Admin')->first();
        $adminType = Tipeuser::where('nama_tipeuser', 'Admin')->first();
        $guestType = Tipeuser::where('nama_tipeuser', 'Guest')->first();

        User::create([
            'username' => 'yni@rssa.id',
            'password' => Hash::make('password'),
            'status_user' => 1,
            'fk_tipeuser_id' => $superAdminType->id,
        ]);

        User::create([
            'username' => 'fra@rssa.id',
            'password' => Hash::make('password'),
            'status_user' => 1,
            'fk_tipeuser_id' => $superAdminType->id,
        ]);

        User::create([
            'username' => 'eka@rssa.id',
            'password' => Hash::make('password'),
            'status_user' => 1,
            'fk_tipeuser_id' => $adminType->id,
        ]);

        User::create([
            'username' => 'fjr@rssa.id',
            'password' => Hash::make('password'),
            'status_user' => 1,
            'fk_tipeuser_id' => $guestType->id,
        ]);
    }
}
