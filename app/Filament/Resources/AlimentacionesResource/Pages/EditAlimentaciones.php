<?php

namespace App\Filament\Resources\AlimentacionesResource\Pages;

use App\Filament\Resources\AlimentacionesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAlimentaciones extends EditRecord
{
    protected static string $resource = AlimentacionesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
