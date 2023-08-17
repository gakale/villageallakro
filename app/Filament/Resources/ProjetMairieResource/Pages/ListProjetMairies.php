<?php

namespace App\Filament\Resources\ProjetMairieResource\Pages;

use App\Filament\Resources\ProjetMairieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProjetMairies extends ListRecords
{
    protected static string $resource = ProjetMairieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
