<?php

namespace App\Filament\Resources\CuidadosResource\Pages;

use App\Filament\Resources\CuidadosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCuidados extends EditRecord
{
    protected static string $resource = CuidadosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
