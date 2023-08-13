<?php

namespace App\Filament\Resources\ServicesSanteResource\Pages;

use App\Filament\Resources\ServicesSanteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServicesSante extends EditRecord
{
    protected static string $resource = ServicesSanteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
