<?php

namespace App\Filament\Resources\MaladieResource\Pages;

use App\Filament\Resources\MaladieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMaladies extends ListRecords
{
    protected static string $resource = MaladieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
