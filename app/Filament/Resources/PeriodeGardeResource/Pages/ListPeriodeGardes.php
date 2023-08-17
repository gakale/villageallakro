<?php

namespace App\Filament\Resources\PeriodeGardeResource\Pages;

use App\Filament\Resources\PeriodeGardeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPeriodeGardes extends ListRecords
{
    protected static string $resource = PeriodeGardeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
