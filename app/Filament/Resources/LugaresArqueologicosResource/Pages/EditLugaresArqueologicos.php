<?php

namespace App\Filament\Resources\LugaresArqueologicosResource\Pages;

use App\Filament\Resources\LugaresArqueologicosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLugaresArqueologicos extends EditRecord
{
    protected static string $resource = LugaresArqueologicosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
