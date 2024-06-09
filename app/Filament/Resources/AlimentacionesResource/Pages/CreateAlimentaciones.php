<?php

namespace App\Filament\Resources\AlimentacionesResource\Pages;

use App\Filament\Resources\AlimentacionesResource;
use App\Models\Animales;
use App\Models\Event;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateAlimentaciones extends CreateRecord
{
    protected static string $resource = AlimentacionesResource::class;
    protected function handleRecordCreation(array $data): Model
    {
        //insert the student
        $record =  static::getModel()::create($data);

        // Create a new Guardian model instance
        $animal= Animales::findOrFail($record->animal_id);
        $event = new Event();
        $event->title = 'alimentación de '.$animal->nombre;
        $event->descripcion = $data['cantidad'].'de '.$data['alimento'];
        $event->tipo = false;
        $event->start = $data['fecha_alimentacion'];
        $event->end = $data['fecha_alimentacion'];
        $event->alimentacion_id = $record->id;
        // Assuming 'student_id' is the foreign key linking to students

        // Save the Guardian model to insert the data
        $event->save();


        return $record;
    }
}
