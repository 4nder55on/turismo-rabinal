<?php

namespace App\Filament\Resources\EncargadosResource\Pages;

use App\Filament\Resources\EncargadosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEncargados extends EditRecord
{
    protected static string $resource = EncargadosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
