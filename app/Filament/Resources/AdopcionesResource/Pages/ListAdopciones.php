<?php

namespace App\Filament\Resources\AdopcionesResource\Pages;

use App\Filament\Resources\AdopcionesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdopciones extends ListRecords
{
    protected static string $resource = AdopcionesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
