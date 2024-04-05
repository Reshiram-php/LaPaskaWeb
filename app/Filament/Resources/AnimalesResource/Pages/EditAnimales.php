<?php

namespace App\Filament\Resources\AnimalesResource\Pages;

use App\Filament\Resources\AnimalesResource;
use App\Models\Animales;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\File;

class EditAnimales extends EditRecord
{
    protected static string $resource = AnimalesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(function(Animales $record){
                foreach ($record->imagen as $image) {
                    if (File::exists('storage/' . $image)) {
                        File::delete('storage/' . $image);
                   }
               }
            }),
        ];
    }
}
