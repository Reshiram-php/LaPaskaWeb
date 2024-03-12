<?php

namespace App\Filament\Resources\AnimalesResource\Pages;

use App\Filament\Resources\AnimalesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnimales extends EditRecord
{
    protected static string $resource = AnimalesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
