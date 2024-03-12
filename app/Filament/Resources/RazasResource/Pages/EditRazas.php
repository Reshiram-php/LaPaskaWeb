<?php

namespace App\Filament\Resources\RazasResource\Pages;

use App\Filament\Resources\RazasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRazas extends EditRecord
{
    protected static string $resource = RazasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
