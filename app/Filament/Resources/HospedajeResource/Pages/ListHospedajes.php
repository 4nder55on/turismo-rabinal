<?php

namespace App\Filament\Resources\HospedajeResource\Pages;

use App\Filament\Resources\HospedajeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHospedajes extends ListRecords
{
    protected static string $resource = HospedajeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
