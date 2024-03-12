<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Razas extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function especies(): BelongsTo{
        return $this->belongsTo(Especies::class,'especie_id');
    }
    public function animales(): HasMany{
        return $this->hasMany(Animales::class);
    }
}
