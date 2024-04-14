<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VentaProductos extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function productos(): BelongsTo{
        return $this->belongsTo(Productos::class,'producto_id');
    }

}
