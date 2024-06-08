<?php

namespace App\Filament\Resources\CuidadosResource\Pages;

use App\Filament\Resources\CuidadosResource;
use App\Models\Animales;
use App\Models\Event;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateCuidados extends CreateRecord
{
    protected static string $resource = CuidadosResource::class;
    protected function handleRecordCreation(array $data): Model
    {
        //insert the student
        $record =  static::getModel()::create($data);

        // Create a new Guardian model instance
        $animal= Animales::findOrFail($record->animal_id);
        $event = new Event();
        $event->title = $data['tipo_cuidado'].' de '.$animal->nombre;
        $event->descripcion = $data['descripcion'];
        $event->tipo = true;
        $event->start = $data['fecha_cuidado'];
        $event->end = $data['fecha_cuidado'];
        $event->cuidado_id = $record->id;
        // Assuming 'student_id' is the foreign key linking to students

        // Save the Guardian model to insert the data
        $event->save();


        return $record;
    }
}
