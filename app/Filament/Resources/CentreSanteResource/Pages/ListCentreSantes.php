<?php

namespace App\Filament\Resources\CentreSanteResource\Pages;

use App\Filament\Resources\CentreSanteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCentreSantes extends ListRecords
{
    protected static string $resource = CentreSanteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
