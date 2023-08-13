<?php

namespace App\Filament\Resources\OpportuniteVenteResource\Pages;

use App\Filament\Resources\OpportuniteVenteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOpportuniteVentes extends ListRecords
{
    protected static string $resource = OpportuniteVenteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
