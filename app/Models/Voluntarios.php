<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Voluntarios extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected static function boot()
    {
        parent::boot();

        /** @var Model $model */
        static::updating(function ($model) {
            if ($model->isDirty('imagen') && ($model->getOriginal('imagen') !== null)) {
                if ($model->getOriginal('imagen') != "team-images/default/default-user.jpg") {

                    Storage::disk('public')->delete($model->getOriginal('imagen'));
                }
            }
        });
    }
}
