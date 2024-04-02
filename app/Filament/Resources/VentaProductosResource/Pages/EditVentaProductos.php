<?php

namespace App\Filament\Resources\VentaProductosResource\Pages;

use App\Filament\Resources\VentaProductosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVentaProductos extends EditRecord
{
    protected static string $resource = VentaProductosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
