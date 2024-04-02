<?php

namespace App\Filament\Resources\VoluntariosResource\Pages;

use App\Filament\Resources\VoluntariosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVoluntarios extends EditRecord
{
    protected static string $resource = VoluntariosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
