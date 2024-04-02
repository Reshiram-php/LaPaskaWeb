<?php

namespace App\Filament\Resources\ApadrinamientosResource\Pages;

use App\Filament\Resources\ApadrinamientosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListApadrinamientos extends ListRecords
{
    protected static string $resource = ApadrinamientosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
