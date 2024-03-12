<?php

namespace App\Filament\Resources\AdopcionesResource\Pages;

use App\Filament\Resources\AdopcionesResource;
use App\Models\Adopciones;
use App\Models\Animales;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdopciones extends EditRecord
{
    protected static string $resource = AdopcionesResource::class;


    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function beforeSave($options = array()): void
    {
        $record = $this->record;
        $adp= Adopciones::findOrFail($record->id);
        if($adp->animal_id!= $this->data['animal_id'])
        {
            $animal= Animales::findOrFail($record->animal_id);
            $animal->estado_id=1;
            $animal->update();
        }

    }
    protected function afterSave(): void
    {
        $record = $this->record;
        $estado= Animales::findOrFail($record->animal_id);
        $estado->estado_id=2;
        $estado->save();
    }
}
