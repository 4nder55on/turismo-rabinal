<?php

namespace App\Filament\Resources\ReservaAlojamientoResource\Pages;

use App\Filament\Resources\ReservaAlojamientoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReservaAlojamientos extends ListRecords
{
    protected static string $resource = ReservaAlojamientoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
