<?php

namespace App\Filament\Resources\DonacionesResource\Pages;

use App\Filament\Resources\DonacionesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDonaciones extends EditRecord
{
    protected static string $resource = DonacionesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
