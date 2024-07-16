<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Userprofile extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_userprofile',
        'alamat_userprofile',
        'status_userprofile',
        'fk_user_id',
        'fk_provinsi_id',
        'fk_kota_id',
        'fk_kecamatan_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'fk_user_id');
    }

    public function provinsi(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class, 'fk_provinsi_id');
    }

    public function kota(): BelongsTo
    {
        return $this->belongsTo(Kota::class, 'fk_kota_id');
    }

    public function kecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class, 'fk_kecamatan_id');
    }
}
