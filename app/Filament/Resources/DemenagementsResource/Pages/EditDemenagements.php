<?php

namespace App\Filament\Resources\DemenagementsResource\Pages;

use App\Filament\Resources\DemenagementsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDemenagements extends EditRecord
{
    protected static string $resource = DemenagementsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
