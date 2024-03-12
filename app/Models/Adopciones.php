<?php

namespace App\Models;

use App\Models\Estados;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Adopciones extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function animales(): BelongsTo{
        return $this->belongsTo(Animales::class,'animal_id');
    }
    public function adoptantes(): BelongsTo{
        return $this->belongsTo(Adoptantes::class,'adoptante_id');
    }
}
