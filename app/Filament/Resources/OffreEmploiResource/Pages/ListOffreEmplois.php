<?php

namespace App\Filament\Resources\OffreEmploiResource\Pages;

use App\Filament\Resources\OffreEmploiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOffreEmplois extends ListRecords
{
    protected static string $resource = OffreEmploiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
