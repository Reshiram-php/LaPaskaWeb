<?php

namespace App\Filament\Resources\AdoptantesResource\Pages;

use App\Filament\Resources\AdoptantesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class ListAdoptantes extends ListRecords
{
    protected static string $resource = AdoptantesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            ExportAction::make()->exports([
                ExcelExport::make('table')->fromTable()]) ->hidden(! auth()->user()->hasRole('Admin')),
        ];
    }
}
