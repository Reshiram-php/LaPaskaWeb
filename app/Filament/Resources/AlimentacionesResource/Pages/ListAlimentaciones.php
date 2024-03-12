<?php

namespace App\Filament\Resources\AlimentacionesResource\Pages;

use App\Filament\Resources\AlimentacionesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlimentaciones extends ListRecords
{
    protected static string $resource = AlimentacionesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
