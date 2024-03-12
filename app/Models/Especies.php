<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Especies extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function razas(): HasMany{
        return $this->hasMany(Razas::class);
    }
    public function animales(): HasMany{
        return $this->hasMany(Animales::class);
    }
}
