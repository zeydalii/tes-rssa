<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Provinsi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_provinsi',
        'status_provinsi'
    ];

    public function kota(): HasMany
    {
        return $this->hasMany(Kota::class);
    }

    public function userprofiles(): HasMany
    {
        return $this->hasMany(Userprofile::class);
    }
}
