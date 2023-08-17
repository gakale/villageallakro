<?php

namespace App\Filament\Resources\CentreInteretResource\Pages;

use App\Filament\Resources\CentreInteretResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCentreInteret extends EditRecord
{
    protected static string $resource = CentreInteretResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
