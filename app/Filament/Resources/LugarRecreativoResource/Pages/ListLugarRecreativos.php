<?php

namespace App\Filament\Resources\LugarRecreativoResource\Pages;

use App\Filament\Resources\LugarRecreativoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLugarRecreativos extends ListRecords
{
    protected static string $resource = LugarRecreativoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
