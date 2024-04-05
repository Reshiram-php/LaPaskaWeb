<?php

namespace App\Filament\Resources\VoluntariosResource\Pages;

use App\Filament\Resources\VoluntariosResource;
use App\Models\Voluntarios;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVoluntarios extends CreateRecord
{
    protected static string $resource = VoluntariosResource::class;

    protected function afterCreate()
    {
        $orders=$this->record;
        if($orders->imagen==null)
        {
            $v= Voluntarios::findOrFail($this->record->getKey());
            $v->imagen="team-images/default/default-user.jpg";
            $v->update();
        }

    }
}
