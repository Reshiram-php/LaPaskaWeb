<?php

namespace App\Filament\Resources\CuidadosResource\Pages;

use App\Filament\Resources\CuidadosResource;
use App\Models\Animales;
use App\Models\Event;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditCuidados extends EditRecord
{
    protected static string $resource = CuidadosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(function (Model $record) {
                $event = Event::where('cuidado_id', $record->id)->first();
                $event->delete();
            }),
        ];
    }
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        // Create a new Guardian model instance
        $animal = Animales::findOrFail($record->animal_id);
        $event = Event::where('cuidado_id', $record->id)->first();

        $event->title = $data['tipo_cuidado'] . ' de ' . $animal->nombre;
        $event->descripcion = $data['descripcion'];
        $event->tipo = true;
        $event->start = $data['fecha_cuidado'];
        $event->end = $data['fecha_cuidado'];
        // Assuming 'student_id' is the foreign key linking to students

        // Save the Guardian model to insert the data
        $event->update();

        return $record;
    }
}
