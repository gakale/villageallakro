<?php

namespace App\Filament\Resources\CentreSanteResource\Pages;

use App\Filament\Resources\CentreSanteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCentreSante extends EditRecord
{
    protected static string $resource = CentreSanteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
