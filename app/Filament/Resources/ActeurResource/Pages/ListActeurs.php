<?php

namespace App\Filament\Resources\ActeurResource\Pages;

use App\Filament\Resources\ActeurResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListActeurs extends ListRecords
{
    protected static string $resource = ActeurResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
