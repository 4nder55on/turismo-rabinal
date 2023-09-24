<?php

namespace App\Filament\Resources\ReservaAlojamientoResource\Pages;

use App\Filament\Resources\ReservaAlojamientoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReservaAlojamiento extends EditRecord
{
    protected static string $resource = ReservaAlojamientoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
