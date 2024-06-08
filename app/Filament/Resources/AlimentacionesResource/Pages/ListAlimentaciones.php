<?php

namespace App\Filament\Resources\AlimentacionesResource\Pages;

use App\Filament\Resources\AlimentacionesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class ListAlimentaciones extends ListRecords
{
    protected static string $resource = AlimentacionesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            ExportAction::make()->exports([
                ExcelExport::make('table')->fromTable()])->hidden(! auth()->user()->hasRole('Admin')),
        ];
    }
}
