<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Soal2Controller extends Controller
{
    public function index()
    {
        // Query untuk mengambil data dengan join
        $users = DB::table('users')
            ->join('tipeusers', 'users.fk_tipeuser_id', '=', 'tipeusers.id')
            ->select('users.username', 'users.password', 'users.status_user', 'tipeusers.nama_tipeuser')
            ->get();

        // Kirim data ke view
        return view('home', compact('users'));
    }
}
