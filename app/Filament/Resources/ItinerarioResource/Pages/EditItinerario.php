<?php

namespace App\Filament\Resources\ItinerarioResource\Pages;

use App\Filament\Resources\ItinerarioResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditItinerario extends EditRecord
{
    protected static string $resource = ItinerarioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
