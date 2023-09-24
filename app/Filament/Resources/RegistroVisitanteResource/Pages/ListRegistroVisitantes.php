<?php

namespace App\Filament\Resources\RegistroVisitanteResource\Pages;

use App\Filament\Resources\RegistroVisitanteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRegistroVisitantes extends ListRecords
{
    protected static string $resource = RegistroVisitanteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
