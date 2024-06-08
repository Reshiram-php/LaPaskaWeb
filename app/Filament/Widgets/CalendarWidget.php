<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\AlimentacionesResource;
use App\Filament\Resources\CuidadosResource;
use App\Models\Event;
use Filament\Widgets\Widget;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

class CalendarWidget extends FullCalendarWidget
{
    public function fetchEvents(array $fetchInfo): array
    {
        return Event::query()
            ->where('start', '>=', $fetchInfo['start'])
            ->where('end', '<=', $fetchInfo['end'])
            ->get()
            ->map(
                fn (Event $event) =>
                [
                    'title' => $event->title,
                    'start' => $event->start,
                    'end' => $event->end,
                    'url' => $event->tipo == true ? CuidadosResource::getUrl(name: 'edit', parameters: ['record' => $event->cuidado_id]) : AlimentacionesResource::getUrl(name: 'edit', parameters: ['record' => $event->alimentacion_id]),
                    'shouldOpenUrlInNewTab' => true,
                    'allDay'=>true

                ]
            )->all();
    }
}
