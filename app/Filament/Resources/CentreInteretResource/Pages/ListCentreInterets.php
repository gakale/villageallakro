<?php

namespace App\Filament\Resources\CentreInteretResource\Pages;

use App\Filament\Resources\CentreInteretResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCentreInterets extends ListRecords
{
    protected static string $resource = CentreInteretResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
