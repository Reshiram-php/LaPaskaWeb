<?php

namespace App\Filament\Resources\VentaProductosResource\Pages;

use App\Filament\Resources\VentaProductosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVentaProductos extends ListRecords
{
    protected static string $resource = VentaProductosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
