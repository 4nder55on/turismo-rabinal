<?php

namespace App\Filament\Resources\EncargadosResource\Pages;

use App\Filament\Resources\EncargadosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEncargados extends ListRecords
{
    protected static string $resource = EncargadosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
