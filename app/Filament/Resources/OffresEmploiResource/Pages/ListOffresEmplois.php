<?php

namespace App\Filament\Resources\OffresEmploiResource\Pages;

use App\Filament\Resources\OffresEmploiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOffresEmplois extends ListRecords
{
    protected static string $resource = OffresEmploiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
