<?php

namespace App\Filament\Resources\PagosFacturacionResource\Pages;

use App\Filament\Resources\PagosFacturacionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPagosFacturacion extends EditRecord
{
    protected static string $resource = PagosFacturacionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
