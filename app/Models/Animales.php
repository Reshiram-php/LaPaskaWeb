<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Animales extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $casts = [
        'imagen' => 'array'
        ];
    public function estados(): BelongsTo{
        return $this->belongsTo(Estados::class,'estado_id');
    }
    public function especies(): BelongsTo{
        return $this->belongsTo(Especies::class,'especie_id');
    }
    public function razas(): BelongsTo{
        return $this->belongsTo(Razas::class,'raza_id');
    }
    protected static function boot()
    {
        parent::boot();

        /** @var Model $model */
        static::updating(function ($model) {
            if ($model->isDirty('imagen')) {

                $originalFieldContents = $model->getOriginal('imagen');
                $newFieldContents = $model->imagen;

                # We attempt to JSON decode the field. If it is an array, this is an indication we have ->multiple() activated
                if (is_array($originalFieldContents)) {
                    $originalFieldContentsDecoded = $originalFieldContents;
                } else {
                    $originalFieldContentsDecoded = json_decode($originalFieldContents);
                }

                # Clean up empty entries in the resulting array
                if (is_array($originalFieldContentsDecoded)) $originalFieldContentsDecoded = array_filter($originalFieldContentsDecoded);

                # Simple case: one file
                if (!is_array($originalFieldContentsDecoded) or count($originalFieldContentsDecoded) == 0)
                {
                   Storage::disk('public')->delete($originalFieldContents);
                }

                # Complex case: multiple files
                else
                {
                    foreach ($originalFieldContentsDecoded as $originalFile)
                     {
                        if (trim($originalFile) != null && !in_array($originalFile, $newFieldContents))
                         {
                            Storage::disk('public')->delete($originalFile);
                         }
                     }
                }
            }
        });
    }
}
