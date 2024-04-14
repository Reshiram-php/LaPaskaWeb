<?php

namespace App\Filament\Resources\AdopcionesResource\Pages;

use App\Filament\Resources\AdopcionesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class ListAdopciones extends ListRecords
{
    protected static string $resource = AdopcionesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            ExportAction::make()->exports([
                ExcelExport::make('table')->fromTable()]),
        ];
    }
}
