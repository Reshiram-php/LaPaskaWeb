<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Animales extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function estados(): BelongsTo{
        return $this->belongsTo(Estados::class,'estado_id');
    }
    public function especies(): BelongsTo{
        return $this->belongsTo(Especies::class,'especie_id');
    }
    public function razas(): BelongsTo{
        return $this->belongsTo(Razas::class,'raza_id');
    }
}
