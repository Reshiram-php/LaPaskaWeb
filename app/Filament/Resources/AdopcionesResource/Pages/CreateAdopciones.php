<?php

namespace App\Filament\Resources\AdopcionesResource\Pages;

use App\Filament\Resources\AdopcionesResource;
use App\Models\Animales;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAdopciones extends CreateRecord
{
    protected static string $resource = AdopcionesResource::class;
    protected function afterCreate(): void
        {
        $record = $this->record;
        $estado= Animales::findOrFail($record->animal_id);
        $estado->estado_id=2;
        $estado->save();
        }
}
