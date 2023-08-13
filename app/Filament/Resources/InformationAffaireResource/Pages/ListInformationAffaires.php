<?php

namespace App\Filament\Resources\InformationAffaireResource\Pages;

use App\Filament\Resources\InformationAffaireResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInformationAffaires extends ListRecords
{
    protected static string $resource = InformationAffaireResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
