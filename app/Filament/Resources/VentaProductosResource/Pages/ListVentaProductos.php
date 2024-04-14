<?php

namespace App\Filament\Resources\VentaProductosResource\Pages;

use App\Filament\Resources\VentaProductosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class ListVentaProductos extends ListRecords
{
    protected static string $resource = VentaProductosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            ExportAction::make()->exports([
                ExcelExport::make('table')->fromTable()]),
        ];
    }
}
