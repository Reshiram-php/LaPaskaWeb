<?php

namespace App\Filament\Resources\VoluntariosResource\Pages;

use App\Filament\Resources\VoluntariosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVoluntarios extends ListRecords
{
    protected static string $resource = VoluntariosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
