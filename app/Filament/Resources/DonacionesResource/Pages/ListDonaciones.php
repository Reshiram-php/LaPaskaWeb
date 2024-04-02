<?php

namespace App\Filament\Resources\DonacionesResource\Pages;

use App\Filament\Resources\DonacionesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDonaciones extends ListRecords
{
    protected static string $resource = DonacionesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
