<?php

namespace App\Models;

use App\Models\Animales;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cuidados extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function animales(): BelongsTo{
        return $this->belongsTo(Animales::class,'animal_id');
    }

}
