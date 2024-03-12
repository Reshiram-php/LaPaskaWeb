<?php

namespace App\Filament\Resources\RazasResource\Pages;

use App\Filament\Resources\RazasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRazas extends ListRecords
{
    protected static string $resource = RazasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
