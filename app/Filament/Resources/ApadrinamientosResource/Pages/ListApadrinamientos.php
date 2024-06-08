<?php

namespace App\Filament\Resources\ApadrinamientosResource\Pages;

use App\Filament\Resources\ApadrinamientosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class ListApadrinamientos extends ListRecords
{
    protected static string $resource = ApadrinamientosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            ExportAction::make()->exports([
                ExcelExport::make('table')->fromTable()])->hidden(! auth()->user()->hasRole('Admin')),
        ];
    }
}
