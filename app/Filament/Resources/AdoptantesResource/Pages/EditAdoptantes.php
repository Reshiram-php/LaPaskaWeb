<?php

namespace App\Filament\Resources\AdoptantesResource\Pages;

use App\Filament\Resources\AdoptantesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdoptantes extends EditRecord
{
    protected static string $resource = AdoptantesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
