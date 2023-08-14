<?php

namespace App\Filament\Resources\ArtisanaleResource\Pages;

use App\Filament\Resources\ArtisanaleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArtisanales extends ListRecords
{
    protected static string $resource = ArtisanaleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
