<?php

namespace App\Filament\Resources\CentresSanteResource\Pages;

use App\Filament\Resources\CentresSanteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCentresSante extends EditRecord
{
    protected static string $resource = CentresSanteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
