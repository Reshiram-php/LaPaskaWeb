<?php

namespace App\Filament\Resources\CuidadosResource\Pages;

use App\Filament\Resources\CuidadosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCuidados extends ListRecords
{
    protected static string $resource = CuidadosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
