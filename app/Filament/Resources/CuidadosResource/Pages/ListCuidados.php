<?php

namespace App\Filament\Resources\CuidadosResource\Pages;

use App\Filament\Resources\CuidadosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class ListCuidados extends ListRecords
{
    protected static string $resource = CuidadosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            ExportAction::make()->exports([
                ExcelExport::make('table')->fromTable()])->hidden(! auth()->user()->hasRole('Admin')),
        ];
    }
}
