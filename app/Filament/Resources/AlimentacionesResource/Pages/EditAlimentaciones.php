<?php

namespace App\Filament\Resources\AlimentacionesResource\Pages;

use App\Filament\Resources\AlimentacionesResource;
use App\Models\Animales;
use App\Models\Event;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditAlimentaciones extends EditRecord
{
    protected static string $resource = AlimentacionesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(function (Model $record) {
                $event = Event::where('alimentacion_id', $record->id)->first();
                $event->delete();
            }),
        ];
    }
    protected function handleRecordUpdate(Model $record, array $data): Model
    {

        $animal = Animales::findOrFail($record->animal_id);
        $event = Event::where('alimentacion_id', $record->id)->first();

        $event->title = 'alimentación de '.$animal->nombre;
        $event->descripcion = $data['cantidad'].'de '.$data['alimento'];
        $event->tipo = false;
        $event->start = $data['fecha_alimentacion'];
        $event->end = $data['fecha_alimentacion'];

        $event->update();

        return $record;
    }
}
