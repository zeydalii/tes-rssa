<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kecamatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kecamatan',
        'status_kecamatan',
        'fk_kota_id',
    ];

    public function kota(): BelongsTo
    {
        return $this->belongsTo(Kota::class, 'fk_kota_id');
    }

    public function userprofiles(): HasMany
    {
        return $this->hasMany(Userprofile::class);
    }
}
