<?php

namespace App\Filament\Resources\EventosActividadesResource\Pages;

use App\Filament\Resources\EventosActividadesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEventosActividades extends ListRecords
{
    protected static string $resource = EventosActividadesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
