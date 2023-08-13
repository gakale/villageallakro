<?php

namespace App\Filament\Resources\CentresInteretResource\Pages;

use App\Filament\Resources\CentresInteretResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCentresInteret extends EditRecord
{
    protected static string $resource = CentresInteretResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
