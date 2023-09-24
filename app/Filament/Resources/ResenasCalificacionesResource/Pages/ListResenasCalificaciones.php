<?php

namespace App\Filament\Resources\ResenasCalificacionesResource\Pages;

use App\Filament\Resources\ResenasCalificacionesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListResenasCalificaciones extends ListRecords
{
    protected static string $resource = ResenasCalificacionesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
