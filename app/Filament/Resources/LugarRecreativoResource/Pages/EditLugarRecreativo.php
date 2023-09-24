<?php

namespace App\Filament\Resources\LugarRecreativoResource\Pages;

use App\Filament\Resources\LugarRecreativoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLugarRecreativo extends EditRecord
{
    protected static string $resource = LugarRecreativoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
