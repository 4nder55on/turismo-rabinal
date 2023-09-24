<?php

namespace App\Filament\Resources\GuiasToursResource\Pages;

use App\Filament\Resources\GuiasToursResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGuiasTours extends ListRecords
{
    protected static string $resource = GuiasToursResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
