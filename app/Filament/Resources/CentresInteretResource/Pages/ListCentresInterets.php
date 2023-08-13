<?php

namespace App\Filament\Resources\CentresInteretResource\Pages;

use App\Filament\Resources\CentresInteretResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCentresInterets extends ListRecords
{
    protected static string $resource = CentresInteretResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
