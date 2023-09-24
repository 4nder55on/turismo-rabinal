<?php

namespace App\Filament\Resources\ResenasCalificacionesResource\Pages;

use App\Filament\Resources\ResenasCalificacionesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResenasCalificaciones extends EditRecord
{
    protected static string $resource = ResenasCalificacionesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
