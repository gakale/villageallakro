<?php

namespace App\Filament\Resources\MairiesResource\Pages;

use App\Filament\Resources\MairiesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMairies extends ListRecords
{
    protected static string $resource = MairiesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
