<?php

namespace App\Filament\Resources\ItinerarioResource\Pages;

use App\Filament\Resources\ItinerarioResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListItinerarios extends ListRecords
{
    protected static string $resource = ItinerarioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
