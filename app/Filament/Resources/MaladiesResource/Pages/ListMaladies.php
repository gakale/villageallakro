<?php

namespace App\Filament\Resources\MaladiesResource\Pages;

use App\Filament\Resources\MaladiesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMaladies extends ListRecords
{
    protected static string $resource = MaladiesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
