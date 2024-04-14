<?php

namespace App\Filament\Resources\DonacionesResource\Pages;

use App\Filament\Resources\DonacionesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class ListDonaciones extends ListRecords
{
    protected static string $resource = DonacionesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            ExportAction::make()->exports([
                ExcelExport::make('table')->fromTable()]),
        ];
    }
}
