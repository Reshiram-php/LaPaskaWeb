<?php

namespace App\Filament\Resources\AdoptantesResource\Pages;

use App\Filament\Resources\AdoptantesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdoptantes extends ListRecords
{
    protected static string $resource = AdoptantesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
