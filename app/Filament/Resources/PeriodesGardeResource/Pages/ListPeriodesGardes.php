<?php

namespace App\Filament\Resources\PeriodesGardeResource\Pages;

use App\Filament\Resources\PeriodesGardeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPeriodesGardes extends ListRecords
{
    protected static string $resource = PeriodesGardeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
