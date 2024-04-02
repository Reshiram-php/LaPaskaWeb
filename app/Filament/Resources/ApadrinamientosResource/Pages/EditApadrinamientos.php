<?php

namespace App\Filament\Resources\ApadrinamientosResource\Pages;

use App\Filament\Resources\ApadrinamientosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditApadrinamientos extends EditRecord
{
    protected static string $resource = ApadrinamientosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
