<?php

namespace App\Filament\Resources\ActualitesResource\Pages;

use App\Filament\Resources\ActualitesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListActualites extends ListRecords
{
    protected static string $resource = ActualitesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
