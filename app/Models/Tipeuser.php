<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tipeuser extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_tipeuser',
        'status_tipeuser'
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
