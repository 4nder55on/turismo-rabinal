<?php

namespace App\Filament\Resources\HospedajeResource\Pages;

use App\Filament\Resources\HospedajeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHospedaje extends EditRecord
{
    protected static string $resource = HospedajeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
