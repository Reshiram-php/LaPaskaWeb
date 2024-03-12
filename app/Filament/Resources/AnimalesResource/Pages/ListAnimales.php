<?php

namespace App\Filament\Resources\AnimalesResource\Pages;

use App\Filament\Resources\AnimalesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAnimales extends ListRecords
{
    protected static string $resource = AnimalesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
