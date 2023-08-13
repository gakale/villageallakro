<?php

namespace App\Filament\Resources\CentresSanteResource\Pages;

use App\Filament\Resources\CentresSanteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCentresSantes extends ListRecords
{
    protected static string $resource = CentresSanteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
