<?php

namespace App\Filament\Resources\ProjetsMairieResource\Pages;

use App\Filament\Resources\ProjetsMairieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProjetsMairies extends ListRecords
{
    protected static string $resource = ProjetsMairieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
