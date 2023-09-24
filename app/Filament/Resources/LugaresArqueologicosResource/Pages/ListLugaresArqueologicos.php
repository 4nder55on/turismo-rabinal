<?php

namespace App\Filament\Resources\LugaresArqueologicosResource\Pages;

use App\Filament\Resources\LugaresArqueologicosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLugaresArqueologicos extends ListRecords
{
    protected static string $resource = LugaresArqueologicosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
