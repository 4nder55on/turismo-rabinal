<?php

namespace App\Filament\Resources\RegistroVisitanteResource\Pages;

use App\Filament\Resources\RegistroVisitanteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRegistroVisitante extends EditRecord
{
    protected static string $resource = RegistroVisitanteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
