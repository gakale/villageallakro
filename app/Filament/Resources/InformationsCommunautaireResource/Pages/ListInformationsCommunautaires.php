<?php

namespace App\Filament\Resources\InformationsCommunautaireResource\Pages;

use App\Filament\Resources\InformationsCommunautaireResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInformationsCommunautaires extends ListRecords
{
    protected static string $resource = InformationsCommunautaireResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
