<?php

namespace App\Filament\Resources\GuiasToursResource\Pages;

use App\Filament\Resources\GuiasToursResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGuiasTours extends EditRecord
{
    protected static string $resource = GuiasToursResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
